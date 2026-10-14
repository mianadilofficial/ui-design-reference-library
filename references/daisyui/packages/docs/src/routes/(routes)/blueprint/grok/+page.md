---
title: Install Blueprint MCP for Grok Build
desc: Install daisyUI Blueprint MCP server for Grok Build.
layout: docs
---

<script>
  import Translate from "$components/Translate.svelte"
</script>

### Step 1: License key

Get a [Blueprint license key](/blueprint/checkout/).

### Step 2: Configure MCP settings

Run this command to add the Blueprint MCP server. The `FIGMA` API key is optional and only needed for Figma-to-code conversion.

```sh
grok mcp add daisyui-blueprint \
  --env LICENSE=YOUR_LICENSE_KEY \
  --env EMAIL=YOUR_EMAIL \
  --env FIGMA=YOUR_FIGMA_API_KEY \
  -- npx -y daisyui-blueprint@latest
```

Check the connection with `grok mcp doctor daisyui-blueprint`. Read the [Grok Build MCP docs](https://docs.x.ai/build/features/mcp-servers) for project-scoped configuration and troubleshooting.

After configuring the server, tell the AI model to use Blueprint MCP.

<a href="/blueprint/figma/" class="btn btn-sm rounded-full not-prose">Next: Setup the Figma API</a>
