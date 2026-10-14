<script>
  import { onMount } from "svelte"
  import Footer from "$components/Footer.svelte"
  import SEO from "$components/SEO.svelte"
  import { t } from "$lib/i18n.svelte.js"
  let { title, desc, children } = $props()

  onMount(() => {
    const handleClick = async (event) => {
      const button = event.target.closest("button[data-copy-code]")
      if (!button) return

      const tooltip = button.closest(".tooltip")
      const code = decodeURIComponent(button.dataset.copyCode || "")

      await navigator.clipboard.writeText(code)
      tooltip?.setAttribute("data-tip", "copied")
      setTimeout(() => tooltip?.setAttribute("data-tip", "copy"), 2000)
    }

    document.addEventListener("click", handleClick)
    return () => document.removeEventListener("click", handleClick)
  })
</script>

<SEO {title} formatTitle={false} {desc} />
<div class="mx-auto max-w-4xl px-4 py-20">
  <div
    class="prose prose-sm lg:prose-h1:text-5xl lg:prose-h2:text-4xl lg:prose-h3:text-3xl md:prose-base w-full max-w-4xl grow pt-10 md:text-sm"
  >
    {#if title}
      <h1>{@html $t(title)}</h1>
    {/if}
    {#if desc}
      <p>{@html $t(desc)}</p>
    {/if}

    {@render children?.()}
  </div>
</div>
<Footer />
