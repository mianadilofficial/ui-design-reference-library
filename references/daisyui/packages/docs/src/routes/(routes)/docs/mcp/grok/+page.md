---
layout: docs
seo: false
---

<script>
  import SEO from "$components/SEO.svelte"
  import Translate from "$components/Translate.svelte"
</script>

<SEO
  title="daisyUI MCP server for Grok Build"
  desc="Set up Grok Build to generate accurate daisyUI code from your prompts."
/>

<div class="breadcrumbs text-sm not-prose opacity-40">
  <ul>
    <li><a href="/docs/mcp/">MCP setup guides</a></li>
    <li>Grok Build</li>
  </ul>
</div>

<h1><img src="https://img.daisyui.com/images/logos/grok.svg" alt="Grok Build" width="40" height="40" class="inline-block me-2 -mt-2 not-prose">daisyUI MCP server for Grok Build</h1>
<p>Set up Grok Build to generate accurate daisyUI code from your prompts.</p>

MCP servers give Grok Build access to external tools and documentation while it works. You have three options for daisyUI:

1. [Blueprint](/blueprint/): The official daisyUI MCP server (recommended for best results)
2. [Context7](https://context7.com/): Free third-party MCP server
3. [daisyUI GitMCP](https://gitmcp.io/saadeghi/daisyui): Free third-party MCP server

<div class="tabs tabs-lift max-sm:tabs-sm">
  <input type="radio" name="mcp_options" class="tab" aria-label="Blueprint" checked />
  <div class="tab-content bg-base-100 border-base-300 px-12 py-3">

#### daisyUI Blueprint

Blueprint is the official MCP server for daisyUI. [Read more about Blueprint](/blueprint/).

1. Get a [Blueprint license](/blueprint/checkout/).
2. Run this command. Set your Blueprint `LICENSE` and `EMAIL` values. `FIGMA` is optional and only needed for Figma-to-code conversion.

```sh:Terminal
grok mcp add daisyui-blueprint \
  --env LICENSE=YOUR_LICENSE_KEY \
  --env EMAIL=YOUR_EMAIL \
  --env FIGMA=YOUR_FIGMA_API_KEY \
  -- npx -y daisyui-blueprint@latest
```

#### Usage

Ask Grok Build to use Blueprint MCP when it writes daisyUI code.

```md:prompt
Give me a light daisyUI 5 theme with a tropical color palette. use Blueprint MCP
```

  </div>
  <input type="radio" name="mcp_options" class="tab" aria-label="Context7" />
  <div class="tab-content bg-base-100 border-base-300 px-12 py-3">

#### Setup Context7 MCP server

Add Context7 over HTTP:

```sh:Terminal
grok mcp add --transport http context7 https://mcp.context7.com/mcp
```

#### Usage

Ask Grok Build to use Context7 when it writes daisyUI code.

```md:prompt
Give me a light daisyUI 5 theme with a tropical color palette. use context7
```

  </div>

  <input type="radio" name="mcp_options" class="tab" aria-label="GitMCP" />
  <div class="tab-content bg-base-100 border-base-300 px-12 py-3">

#### Setup daisyUI GitMCP server

Add daisyUI GitMCP over HTTP:

```sh:Terminal
grok mcp add --transport http daisyui-gitmcp https://gitmcp.io/saadeghi/daisyui
```

#### Usage

Ask Grok Build to use daisyUI GitMCP when it writes daisyUI code.

```md:prompt
Give me a light daisyUI 5 theme with a tropical color palette. use daisyui-gitmcp
```

  </div>
</div>

Use `grok mcp list` to see configured servers. If a server doesn't connect, run `grok mcp doctor <name>`. Read the [Grok Build MCP docs](https://docs.x.ai/build/features/mcp-servers) for project scope, OAuth, compatibility, and log locations.
