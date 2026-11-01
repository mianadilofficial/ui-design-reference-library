/**
 * Port the Claude Code skills and brief to agents that read the same files
 * without Claude Code's substitutions.
 *
 * A skill names kit files as `${CLAUDE_SKILL_DIR}/../../../<path>`, which only
 * Claude Code expands. Gemini CLI hands a workspace skill to the model verbatim,
 * and Antigravity has the model open SKILL.md itself, so there the variable is
 * a literal string and every path in the skill points at nothing. Extension
 * skills are the exception: Gemini CLI expands `${extensionPath}` in them.
 *
 * portSkill rewrites to `base`: '' for a workspace install, where the kit sits
 * at the project root and the agent works from there, or '${extensionPath}/'
 * for the extension. It refuses any form of the variable it was not written
 * for, rather than leave one half-rewritten.
 */
'use strict';

const SKILL_ROOT = '${CLAUDE_SKILL_DIR}/../../..';

/* Skills that only work inside Claude Code, with the mechanism each one needs. */
const CLAUDE_ONLY = {
  critique: 'runs the design critic as a forked subagent in a fresh context, which is a Claude Code mechanism',
  observe: 'reports what the Claude Code hooks recorded; nothing else records those events',
  'scaffold-project': 'scaffolds the Claude Code project layout: a CLAUDE.md brief, .claude/settings.json and .claude/rules',
};

/* A kit file a skill names that this surface ships under another name. */
const RENAMED = { 'CLAUDE.md': 'GEMINI.md' };

function portSkill(text, base) {
  let out = text;
  for (const [from, to] of Object.entries(RENAMED)) {
    out = out.split(`${SKILL_ROOT}/${from}`).join(`${base}${to}`)
      .split(`(${from} → Verification Protocol)`).join(`(${to} → Verification)`);
  }
  out = out
    .split(`${SKILL_ROOT}/`).join(base)
    .split(SKILL_ROOT).join(base ? base.replace(/\/$/, '') : '.')
    .split('`$ARGUMENTS`').join("the user's request");
  const left = out.match(/\$\{CLAUDE_SKILL_DIR\}\S*|\$ARGUMENTS/);
  if (left) throw new Error(`cannot port "${left[0]}": only ${SKILL_ROOT}/ is understood`);
  // The skill was written for Claude Code, and the reader is not in it. Say what
  // differs once, at the top, rather than rewrite prose that would then be wrong.
  const end = out.indexOf('\n---\n', 4);
  if (!out.startsWith('---\n') || end < 0) throw new Error('a skill without frontmatter cannot be ported');
  const note = [
    '> Ported from the Claude Code skill.'
      + (base ? '' : ' Every path in it is relative to the project root, where the kit is installed.'),
    '> Where it says `CLAUDE.md`, the same rules are in `GEMINI.md`. A `/name` it mentions is',
    '> the skill of that name. `/critique` exists only in Claude Code: where it is asked for, run',
    `> \`node ${base}scripts/taste_audit.mjs <file>\` and \`node ${base}scripts/slop_tells.mjs <file>\`,`,
    '> report what they print, and say that a human read of the work is still owed.',
  ].join('\n');
  return `${out.slice(0, end + 5)}\n${note}\n${out.slice(end + 5)}`;
}

/* AGENTS.md from its first rule on, under an opening that says where the
   paths are relative to. Same doctrine, so it cannot drift from the source. */
const OPENING = {
  workspace: [
    'This file is the whole brief, written for **Gemini CLI** and **Antigravity**,',
    'which both read `GEMINI.md`. Every path in it is relative to the project root,',
    'where the kit is installed. The kit\'s skills are in `.agents/skills/` and load',
    'when a task matches one; their paths are relative to the project root too.',
  ],
  extension: [
    'This file is the whole brief, loaded by the **Gemini CLI extension**. Every path',
    'in it is relative to the directory this file is in, the extension root, not to',
    'the project being worked on: run a gate as',
    '`node <extension root>/scripts/verify_states.mjs path/to/page.html`. The',
    'extension\'s skills carry absolute paths already, and its MCP tools (`run_gate`,',
    '`review_ui`, `get_design_system`) need no path to the kit at all.',
  ],
};

function geminiBrief(agentsMd, where) {
  const cut = agentsMd.indexOf('\n---\n');
  if (cut < 0 || !OPENING[where]) throw new Error('cannot build GEMINI.md');
  const [title, persona] = agentsMd.slice(0, cut).split('\n\n');
  return `${title}\n\n${persona}\n\n${OPENING[where].join('\n')}\n${agentsMd.slice(cut)}`;
}

module.exports = { portSkill, geminiBrief, CLAUDE_ONLY, RENAMED };
