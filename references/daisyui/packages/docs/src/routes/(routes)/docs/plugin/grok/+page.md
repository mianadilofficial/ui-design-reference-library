---
layout: docs
seo: false
---

<script>
  import Translate from "$components/Translate.svelte"
  import SEO from "$components/SEO.svelte"
</script>

<SEO
  title="daisyUI plugin for Grok Build"
  desc="Install the daisyUI plugin for Grok Build so your agent can use the latest daisyUI skill."
/>

<div class="breadcrumbs text-sm not-prose opacity-40">
  <ul>
    <li><a href="/docs/plugin/">Plugin setup guides</a></li>
    <li>Grok Build</li>
  </ul>
</div>

<h1><img src="https://img.daisyui.com/images/logos/grok.svg" alt="Grok Build" width="40" height="40" class="inline-block me-2 -mt-2 not-prose">daisyUI plugin for Grok Build</h1>
<p>Install the daisyUI plugin for Grok Build so your agent can use the latest daisyUI skill.</p>

The daisyUI plugin gives Grok Build the current component rules, theme rules, and usage instructions.

### Install

Add the daisyUI marketplace, then install the plugin:

```sh:Terminal
grok plugin marketplace add https://github.com/saadeghi/daisyui
grok plugin install daisyui --trust
```

Run `grok plugin list` to confirm the plugin is enabled. You can also open `/marketplace` in Grok Build to browse the marketplace.

### Usage

The plugin's daisyUI skill is available as a slash command:

```md:prompt
/daisyui Make a login form
```

Read the [Grok Build plugin docs](https://docs.x.ai/build/features/skills-plugins-marketplaces) for plugin paths, marketplaces, and Claude Code compatibility.

For on-demand component snippets and lower token usage, use [daisyUI Blueprint MCP server](/blueprint/).
