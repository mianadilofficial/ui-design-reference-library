---
layout: docs
seo: false
componentfooter: false
---

<script>
  import Translate from "$components/Translate.svelte"
  import SEO from "$components/SEO.svelte"
</script>

<SEO
  title="How to add the daisyUI skill to Grok Build"
  desc="Add the daisyUI skill to Grok Build and generate accurate daisyUI components from your prompts."
/>

<div class="breadcrumbs text-sm not-prose opacity-40">
  <ul>
    <li><a href="/docs/skill/">daisyUI Skill</a></li>
    <li>Grok Build</li>
  </ul>
</div>

<h1><img src="https://img.daisyui.com/images/logos/grok.svg" alt="Grok Build" width="40" height="40" class="inline-block me-2 -mt-2 not-prose"> Add the daisyUI skill to Grok Build</h1>
<p>Set up Grok Build to generate accurate daisyUI code from your prompts.</p>

The [daisyUI skill](https://daisyui.com/SKILL.md) gives Grok Build current component rules, theme rules, and usage instructions. Grok Build reads Claude Code skills automatically, so you can use the shared skill installer without extra configuration.

### Install

Run this command. It installs the skill in Claude Code's project skill directory, which Grok Build reads automatically.

```sh:Terminal
npx skills add saadeghi/daisyui --agent claude-code --yes
```

Run `grok inspect` to confirm Grok Build found the skill.

### Usage

User-invocable skills appear as slash commands in Grok Build. For example:

```md:prompt
/daisyui Make a login form
```

Read the [Grok Build skill docs](https://docs.x.ai/build/features/skills-plugins-marketplaces) for native skill paths, extra search paths, plugins, and Claude Code compatibility.

### Use an MCP server to save tokens and get faster results

We recommend using an [MCP server](/docs/mcp/grok/) for daisyUI. MCP servers provide context on demand instead of loading a static skill file into each session.

<a href="/docs/mcp/grok/" class="btn">See the daisyUI MCP guide for Grok Build</a>
