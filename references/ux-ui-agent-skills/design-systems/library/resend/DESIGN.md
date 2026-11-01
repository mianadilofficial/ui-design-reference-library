---
version: alpha
name: Resend
category: "Productivity & SaaS"
description: "Resend is a dark-first email API brand, a pure black canvas (#000000) with soft white-alpha text (#f0f0f0, then #a1a4a5), 96px domaine serif headlines beside aBCFavorit and Inter, and glassy outlined buttons at 16px radius. Panels are blue-black (#0b0e14) with faint blue-white hairlines, and colour is withheld for logos and code."

colors:
  canvas: "#000000"
  ink: "#f0f0f0"
  ink-muted: "#a1a4a5"
  ink-alpha-70: "#f1f7feb5"
  ink-strong: "#fcfdffef"
  ink-soft: "#ebeced"
  ink-quiet: "#ababab"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-panel: "#0b0e14"
  hairline: "#d6ebfd30"
typography:
  display:
    fontFamily: domaine, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: domaine, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: aBCFavorit, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 67.2px
    letterSpacing: "-2.8px"
  subheading:
    fontFamily: aBCFavorit, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 600
  nav:
    fontFamily: inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  button-secondary:
    fontFamily: inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 48px
    borderColor: "{colors.hairline}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 0px 16px
    height: 40px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4px 0px
  card:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    padding: 20px 16px 12px
---

## Overview

Resend sells an email-sending API, and its homepage is built to look like a quiet developer terminal with a magazine headline. The capture shows a near-black page with a faint diagonal sheen of light crossing the hero. The header carries the white Resend wordmark, a nav (Features, Company, Enterprise, Help, Docs, AI, Pricing, each with a chevron except Pricing), a "Log in" link and a glass-outlined "Get started" button. Below it a small pill announcement, "Join us at Resend Forward", sits over the headline "Email for developers", set in a light serif at very large size. The sub-line reads "The best way to reach humans instead of spam folders. Deliver transactional and marketing emails at scale." Two controls follow: "Get started" in an outlined glass button and "Documentation" as a borderless grey text button.

The next band, on a slightly raised black panel with a rounded top edge, says "Companies of all sizes trust Resend to deliver their most important emails." and shows a two-row wall of customer logos (Warner Bros., Max, Raycast, Mistral AI, Replit, Anghami, Gumroad, Decathlon, Supabase, Leap, Payload, Paper) in white, followed by "Explore Enterprise". After that, a glossy dark envelope icon sits above "Integrate this morning", where the last two words carry a warm gold gradient, then a row of rounded-square language icons (Node.js, Serverless, Ruby, Python, PHP, CLI, Go, Rust, Java, Elixir, .NET, REST, SMTP) and a code card with a tab strip (Node.js, Next.js, Remix, Nuxt, Express, Hono, Redwood, Bun, Astro), line numbers and a copy button.

The voice is short, confident and a little literary ("Integrate this morning"). Density is low: lots of black, one idea per band.

## Colors

The measured page is monochrome. Resend's own brand-guidelines page (https://resend.com/handbook/design/what-are-our-brand-guidelines) says the palette "prioritizes dark mode" on a black and white foundation, extended with named tones Eggshell, Iron, Stone and Zinc; it gives no hex values, so the hexes below come from the live measurement only.

- **Canvas.** `{colors.canvas}` is pure black. Raised bands and code panels use `{colors.surface-panel}` (`#0b0e14`, a blue-tinted black).
- **Ink.** `{colors.ink}` (`#f0f0f0`) is the main light text; `{colors.ink-strong}` is a slightly brighter blue-white at about 94% opacity; `{colors.ink-soft}` and `{colors.ink-quiet}` are neutral greys. The single most-read colour in the page is `{colors.ink-muted}` (`#a1a4a5`), used for body paragraphs and secondary buttons, with `{colors.ink-alpha-70}` as a blue-white at about 71%. Reassignment: the generator picked `#a1a4a5` as `ink`; the capture shows headings and logos in the brighter off-white, so `ink` is `#f0f0f0` and the grey is `ink-muted`.
- **Primary.** There is no filled brand button on the live page. The visible calls to action are transparent with white labels and a faint border, so `{colors.primary}` is white and `{colors.on-primary}` is black. The generator's detected primary (`#00a3ff`) comes from a "Get Started" link inside the sample "Welcome to ACME" email that the page shows as a product demo, which is customer-template content and not site chrome; I overrode that role.
- **Hairline.** `{colors.hairline}` is a blue-white at about 19% opacity, used for card and panel borders.
- **Accent.** The gold on "this morning" and the tinted language-icon states are gradients and imagery, which I did not tokenise.

## Typography

The brand-guidelines page names three families: ABC Favorit (Dinamo) for display, Inter (Rasmus Andersson) for product and Domaine Display (Klim Type Foundry) for editorial. The measured loaded fonts match: `domaine` (400) is the hero headline, `aBCFavorit` (400 and 500) sets the section headings, `inter` (variable 100-900) the interface and body, and `commitMono` the code. Inter is open source; Domaine and ABC Favorit are commercial typefaces, so a licence or a fallback sans (`ui-sans-serif, system-ui`, which the declared stacks already include) is needed for reproduction.

The scale: `{typography.display}` is 96px with line-height 96px and -0.96px tracking (`{typography.display-mobile}` 64px at 390px width); `{typography.heading}` is 56px/67.2px with -2.8px tracking for section titles; `{typography.subheading}` is 20px; `{typography.body}` is 18px/27px; `{typography.nav}` is 16px; `{typography.link}` is 14px; buttons are Inter 600 at 16px (`{typography.button}`) in the hero and 14px (`{typography.button-secondary}`) in the header. Weight is 400 almost everywhere except buttons, so the page relies on size and serif-versus-sans contrast for hierarchy, and negative tracking increases at larger sizes.

## Layout

A left-aligned hero gives way to centred bands. The hero text column sits at the left, roughly a third of the width, leaving the rest of the field for the light sheen; subsequent sections (logos, integrate, code) are centred. Logos form two rows of six, evenly spaced; the language icons are a single row of thirteen rounded squares with labels beneath. The code card is wide, framed by a hairline and a 24px radius. The spacing steps in the frontmatter (`{spacing.s5}` 8px to `{spacing.s10}` 20px) describe control internals; section gaps are large and were not tokenised.

## Elevation & Depth

Depth is made with value and light, not shadow. The page is black, bands are raised by a very slightly lighter blue-black panel (`{colors.surface-panel}`) with a rounded top edge, and a soft diagonal highlight crosses the hero. Controls are defined by a 2px border at roughly 5% white and a transparent fill, so they read as glass. The envelope icon is the only strongly dimensional object, rendered as a glossy dark tile.

## Shapes

Radii run through a measured ladder: 4, 6, 8, 10, 12, 16 and 24px, plus full pills. Header and hero buttons use `{rounded.2xl}` (16px), the code card and panels `{rounded.3xl}` (24px), and `{rounded.md}`, `{rounded.sm}` and `{rounded.pill}` also occur in the measured radii (I did not map each to an element). Language icons are rounded squares. The overall impression is soft but not bubbly, with the larger radius reserved for containers.

## Components

- **Primary action.** `{components.button-primary}`: transparent glass, 16px/600 white label, 48px tall, `0 20px` padding, 16px radius, 2px faint border (measured on all hero and footer "Get started" buttons).
- **Header action.** `{components.button-secondary}`: the same recipe at 40px tall and 14px/600.
- **Text button.** "Documentation": no border, `{colors.ink-muted}` label.
- **Nav.** `{components.nav-link}`: 16px Inter links with chevrons.
- **Card.** `{components.card}`: blue-black panel, 24px radius and hairline border.
- **Announcement pill.** A small outlined pill with an arrow above the hero headline.
- **Code card.** Tabs with icons, a line-numbered monospace script and a copy button.

## Design System Architecture

Resend publishes brand rules, not a component system, on its own site: the brand guidelines page at https://resend.com/handbook/design/what-are-our-brand-guidelines covers principles (simplicity, modernity, memorability), naming ("Resend", never "ReSend"), a symbol redesigned in July 2025, three typefaces and a dark-first palette, and the brand-kit page at https://resend.com/brand covers logo files in black and white with the instruction not to alter them. The open-source React Email library (https://github.com/resend/react-email) offers unstyled email components (Html, Head, Button, Container, CodeBlock, Heading, Tailwind and more) and states no design tokens, so it is not a token source. The site's de-facto system is Tailwind-based: the root defines `--tw-*` variables, the Radix colour scales with alpha variants (`--slate-a3`, `--green-a9` and so on), Tailwind colour names, and `--font-mono` for commitMono.

## Do's and Don'ts

Do keep the canvas pure black and let light text carry hierarchy. Do pair a large editorial serif headline with Inter and a mono code face. Do use glass outlines for actions and a 24px radius for containers. Do put real code beside every claim. Do follow the brand rules: capitalised "Resend", unaltered logo files.

Don't introduce a saturated filled button on the marketing page; the sample-email blue belongs to the demo content. Don't use drop shadows. Don't set body copy in white at full opacity; use the muted greys. Don't use heavy weights for headlines. Don't use the logo in a colour other than the supplied black and white versions.

## Responsive Behavior

At 390px the hero headline drops from 96px to `{typography.display-mobile}` (64px, line-height 64px, tracking -0.64px); the typeface and weight stay the same. The full-page capture is at desktop width, and I did not inspect how the nav, logo wall and icon row collapse on mobile, so those behaviours are not described.

## Iteration Guide

Begin with black and the two inks. For a new action, copy the glass button (transparent fill, faint 2px border, 16px radius). For a new panel use `{colors.surface-panel}` with a hairline and 24px radius. Keep headlines in the serif and section titles in aBCFavorit, and use Inter for everything functional. Check the brand guidelines before adding a colour, as they name Eggshell, Iron, Stone and Zinc tones whose hex values must be taken from the brand kit, and re-measure the live page before adding any token.
