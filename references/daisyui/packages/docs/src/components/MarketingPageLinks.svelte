<script>
  import { page } from "$app/state"

  let links = $derived((page.data.pages || []).filter((link) => link.href !== page.url.pathname))
</script>

<ul>
  {#each links as link}
    <li><a href={link.href}>{link.label}</a></li>
  {/each}
</ul>
