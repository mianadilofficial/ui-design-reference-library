---
version: alpha
name: Ollama
category: "AI & LLM Platforms"
description: "Ollama's marketing site is a near-monochrome, text-first page - white canvas (#ffffff), neutral-900 ink (#171717), muted neutral-500 captions (#737373), the system ui-sans-serif stack with a tight 22px/500 headline at -0.55px tracking, and a single pill-shaped (9999px) near-black \"Get started\" button that darkens to #000000 on hover."

colors:
  canvas: "#ffffff"
  ink: "#171717"
  primary: "#171717"
  on-primary: "#ffffff"
  ink-muted: "#737373"
  ink-black: "#000000"
  ink-soft: "#262626"
  ink-faint: "#a3a3a3"
  hairline: "#e5e5e5"
  code-surface: "#0000000a"
  tag-blue-bg: "#ddf4ff"
  tag-blue-text: "#2563eb"
  tag-indigo-bg: "#eef2ff"
  tag-indigo-text: "#4f46e5"

typography:
  display:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 30.25px
    letterSpacing: "-0.55px"
  display-mobile:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 27.5px
    letterSpacing: "-0.5px"
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  display-pricing:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.2px"
  display-download:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 38.4px
    fontWeight: 450
    lineHeight: 48px
    letterSpacing: "-0.768px"
  heading-library:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 42px
    letterSpacing: "-0.7px"
  heading-card:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  heading-model:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body-small:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body-list:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  tag:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 20px

rounded:
  pill: 9999px
  chip: 6px
  code: 12px
  card: 16px

spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 24px
  s6: 28px
  s7: 32px
  s8: 96px

components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.ink-black}"
  button-pricing:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body-list}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 44px
  pricing-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.body-list}"
    rounded: "{rounded.card}"
    padding: 24px
  model-tag:
    backgroundColor: "{colors.tag-blue-bg}"
    textColor: "{colors.tag-blue-text}"
    typography: "{typography.tag}"
    rounded: "{rounded.chip}"
    padding: 2px 8px
  model-tag-indigo:
    backgroundColor: "{colors.tag-indigo-bg}"
    textColor: "{colors.tag-indigo-text}"
    typography: "{typography.tag}"
    rounded: "{rounded.chip}"
    padding: 2px 8px
  filter-input:
    textColor: "{colors.ink-black}"
    typography: "{typography.body-small}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 32px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    padding: 0px 32px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
  footer:
    textColor: "{colors.ink-black}"
---

## Overview

Ollama's public site (ollama.com) is a quiet, near-monochrome, text-first product site. The home page, Pricing, Download and Library (model list) pages were captured at a 1280px viewport and measured. All four share one header (llama line-drawing logo at left; GitHub star count, Download, Models, Docs, Pricing, Sign in at right) and one footer line, on a white canvas with black and gray text. The only chromatic color measured anywhere is on the model library's capability and size tags.

The home page is a single screen: headline "Ollama is the most popular way to build with open models." at `{typography.display}` (22px, weight 500, -0.55px tracking), a larger intro paragraph at `{typography.body}` (20px/400), one pill button, three stats (9M+ installs a month, 1B+ model downloads, 200T+ tokens served) and a grid of twelve grayscale partner logos. Hierarchy comes from weight and spacing, not size.

**Key Characteristics:**
- Neutral palette: `{colors.ink}` (#171717), `{colors.ink-black}` (#000000), `{colors.ink-soft}` (#262626), `{colors.ink-muted}` (#737373), `{colors.ink-faint}` (#a3a3a3), borders `{colors.hairline}` (#e5e5e5) on `{colors.canvas}` (#ffffff).
- One button shape: a filled `{colors.ink}` pill with a white label (`{rounded.pill}`), 44px tall, in every measured context (home, Pricing cards).
- System font stack (`ui-sans-serif, system-ui, sans-serif` plus emoji fallbacks) for nearly all text; headlines use negative letter-spacing.
- Flat surfaces: no box shadows measured on any of the four pages; separation is 1px `{colors.hairline}` borders and 4%-black fills.
- Cards use a generous `{rounded.card}` (16px) radius; inputs, segmented controls and buttons use pills; small tags use `{rounded.chip}` (6px).
- Left-aligned narrow column on the home and Download pages; centered title and four-up card row on Pricing; a centered single column list on Library.
- Content-first microcopy: plain statements, numbers with plus signs, prices in dollars, and a copy-paste `curl` command on Download.

## Colors

> Sources: measured on https://ollama.com, /pricing, /library and /download (SOURCES.json), plus class names read from the homepage and library HTML.

### Brand & Accent
- **Ink / Primary** (`{colors.ink}` / `{colors.primary}` - `#171717`): Tailwind `neutral-900`. Fill of every measured primary button (home "Get started", Pricing "Download" / "Get Pro" / "Get Team" / "Contact us") and the home headline and paragraph color.
- **Ink Black** (`{colors.ink-black}` - `#000000`): header, nav, footer container text, Pricing body text and the button hover fill.
- There is no brand hue on these pages; the llama logo is black line art.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): page, header and pricing-card background.
- **Code Surface** (`{colors.code-surface}` - `#0000000a`, i.e. black at about 4%): the install command block and the agent-prompt block on Download (markup: `bg-black/[0.04]`), also the segmented OS switcher.
- **Hairline** (`{colors.hairline}` - `#e5e5e5`): the 1px border on Pricing cards and table cells.

### Text
- **Ink Soft** (`{colors.ink-soft}` - `#262626`): model descriptions on Library (the most-read color on that page).
- **Ink Muted** (`{colors.ink-muted}` - `#737373`, `neutral-500`): stat captions, footer, Pricing helper text, Library metadata.
- **Ink Faint** (`{colors.ink-faint}` - `#a3a3a3`): the underlined "annually" link on Pricing and other tertiary text.
- **On Primary** (`{colors.on-primary}` - `#ffffff`): button labels.

### Model tags (Library page only)
- **Tag Blue** background `{colors.tag-blue-bg}` (`#ddf4ff`) with text `{colors.tag-blue-text}` (`#2563eb`, Tailwind `blue-600`): parameter-size tags such as 8b, 70b, 405b.
- **Tag Indigo** background `{colors.tag-indigo-bg}` (`#eef2ff`, `indigo-50`) with text `{colors.tag-indigo-text}` (`#4f46e5`, `indigo-600`): capability tags such as tools, thinking, embedding.
- A cyan text color (`#06b6d4`) and `#ecfeff` background were also measured on Library, applied to the "cloud" tag; they are not promoted to tokens here.

### Semantic
No success/warning/error colors were measured. The Pricing feature lists use dark check icons, not green.

### Logo grid treatment
The twelve partner logos on the home page (Apple, NVIDIA, Microsoft, Meta, Adobe, Intel, NASA, Netflix, IBM, Nike, Visa, Mercedes-Benz) carry `opacity-50 grayscale`, flattening third-party brand colors into the neutral palette.

## Typography

### Font Family
Measured text resolves to the Tailwind `font-sans` stack: `ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"`. On the macOS capture machine this renders as the system UI font. The site CSS also defines `.font-rounded` (`SF Pro Rounded, system-ui, -apple-system, BlinkMacSystemFont, sans-serif`), which was measured on one Pricing link ("annually"), and `.font-mono` (`ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, ...`) used for the install command on Download.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 22px | 500 | 30.25px | -0.55px | Home h1 (desktop) |
| `{typography.display-mobile}` | 20px | 500 | 27.5px | -0.5px | Home h1 at 390px |
| `{typography.display-pricing}` | 48px | 600 | 48px | -1.2px | "Pricing" page title |
| `{typography.display-download}` | 38.4px | 450 | 48px | -0.768px | "Download Ollama" title |
| `{typography.heading-library}` | 28px | 500 | 42px | -0.7px | "Library" title (capitalized) |
| `{typography.heading-model}` | 24px | 500 | 32px | normal | Model names in the list |
| `{typography.heading-card}` | 20px | 500 | 28px | normal | Plan names, section h2 on Download |
| `{typography.body}` | 20px | 400 | 28px | normal | Home intro paragraph |
| `{typography.button}` | 18px | 400 | 28px | normal | Home button, nav links |
| `{typography.body-list}` | 16px | 400 | 24px | normal | Pricing button labels (weight 500 in practice on those buttons), model descriptions |
| `{typography.body-small}` | 14px | 400 | 20px | normal | Pricing body, table, filter input |
| `{typography.tag}` | 13px | 500 | 20px | normal | Library tags (`text-xs sm:text-[13px] font-medium`) |

The Pricing buttons were measured at 16px with weight 500; the `{typography.body-list}` token records the 16px/400 body size, so button labels there are 16px at weight 500.

### Principles
- Weights measured across pages: 400, 450 (Download title), 500, and 600 (Pricing title and table headers). No 700.
- Large titles carry negative tracking that scales with size (-1.2px at 48px, -0.768px at 38.4px, -0.7px at 28px, -0.55px at 22px).
- Numerals in stats use tabular figures (`tabular-nums`).

### Font substitutes
No proprietary web font is loaded; the system stack is the design. For a consistent cross-platform match, Inter is a reasonable open-source stand-in, but that is a suggestion, not an Ollama specification.

## Layout

- **Header.** 80px tall flex bar with 32px horizontal padding at desktop; sticky below the `lg` breakpoint. Logo left, nav right; the nav uses `text-lg leading-6 tracking-tight`. A hairline border (12% black) appears once scrolled.
- **Home.** `<main>` with `pt-20 md:pt-24`, side padding from the site's `px-gutter` clamp utility; content capped at `max-w-xl`, left-aligned. Spacing: `mt-4` under the headline, `mt-12` before the button, `mt-16 md:mt-20` before stats and the logo grid. The logo grid is `grid-cols-3 sm:grid-cols-6` with `h-8` cells.
- **Pricing.** Centered 48px title, then a four-column card row (Free, Pro, Team, Enterprise) with 24px card padding; each card measured 296px wide. Below: a "Model pricing" table (columns Model, Input, Cached input, Output) in a rounded bordered container, then an FAQ column. The table and FAQ sit in a narrower centered column than the cards.
- **Library.** Single centered column: logo mark and title, a pill filter input (32px tall, 440px wide) with a "Popular" sort select, then a list of models separated by hairline rules.
- **Download.** Left-aligned column: title, one-line intro, "Install" row with an OS switcher (macOS / Linux / Windows), a command block, a "Download manually" link and a "Building with an agent?" prompt block with a "Show full prompt" disclosure.
- **Footer.** Copyright left, nine small links right (Blog, Docs, GitHub, Discord, X (Twitter), Support, Careers, Privacy, Terms).

### Spacing scale
Measured gaps and paddings: `{spacing.s1}` 6px, `{spacing.s2}` 8px, `{spacing.s3}` 12px, `{spacing.s4}` 14px, `{spacing.s5}` 24px, `{spacing.s6}` 28px, `{spacing.s7}` 32px, `{spacing.s8}` 96px. On Pricing the most frequent gap is 8px and the most frequent paddings are 16px and 12px (table cells and list rows).

## Elevation & Depth

Depth is carried by borders and tints, not shadows. No `box-shadow` was measured on any of the four pages. Pricing cards have a 1px `{colors.hairline}` border and `{rounded.card}` radius on the white canvas. Code and prompt blocks on Download use `{colors.code-surface}` (a 4% black fill) with no border. The sticky header gains a faint hairline only when scrolled. Focus rings come from Tailwind's `--tw-ring-color` variable, which resolves to `#3b82f680` by default; it is a framework default rather than a measured brand color.

## Shapes

- **Pill** (`{rounded.pill}`, 9999px): buttons, the Library filter input, the OS switcher and its inner segments.
- **Card** (`{rounded.card}`, 16px): the Pricing plan cards (measured with 24px padding and a 1px `{colors.hairline}` border).
- **Code** (`{rounded.code}`, 12px): the Download command and prompt blocks (markup `rounded-xl`).
- **Chip** (`{rounded.chip}`, 6px): Library tags (markup `rounded-md`, padding `px-2 py-0.5`).
- Other radii in the stylesheet (2px, 4px, 5px, 24px) were not measured on the captured pages and are not tokens.

## Components

### Primary button
`{components.button-primary}`: `{colors.ink}` fill, `{colors.canvas}` label, 18px/400, `{rounded.pill}`, padding 8px 24px, 44px tall (139px wide for "Get started"; links to `/signup`). Hover changes the fill to `{colors.ink-black}` (`{components.button-primary-hover}`); the measured hover leaves radius, border and shadow unchanged.

### Pricing button
`{components.button-pricing}`: same fill and pill, 16px at weight 500, padding 10px 24px, 44px tall. Seen on "Contact us" (129px wide) and "Download" (122px wide); the Pro and Team cards show equivalent "Get Pro" and "Get Team" buttons.

### Pricing card
`{components.pricing-card}`: white, 1px `{colors.hairline}` border, `{rounded.card}`, 24px padding. Layout inside: plan name (`{typography.heading-card}`), a large price (for example "$0", "$20 / mo. or $200/yr billed annually", "$500 / mo.", "Custom"), a muted description, an "Includes:" / "Everything in X, plus:" label, a check-marked feature list, and the button pinned to the bottom. The Pro card holds a two-segment Pro/Max toggle; the Team card has an "Early access" outlined pill label.

### Model tag
`{components.model-tag}` (blue) and `{components.model-tag-indigo}` (indigo): 13px/500, 2px 8px padding, `{rounded.chip}`. Tags appear in a wrapping row under each model description, followed by a metadata line (Pulls, Tags, Updated) with small icons in `{colors.ink-muted}`.

### Filter input
`{components.filter-input}`: pill, 32px tall, 14px text, 12px horizontal padding, with a search icon and "Filter models" placeholder, beside a "Popular" sort select.

### Install block
A `{colors.code-surface}` rounded block with a monospace command (`curl -fsSL https://ollama.com/install.sh | sh` for macOS in the capture) and a copy icon at the right; above it a segmented pill switcher for macOS / Linux / Windows with the active segment on white.

### Nav
`{components.nav}`: white, 32px side padding; links use `{typography.button}` and underline on hover (measured).

### Footer
`{components.footer}`: small muted links (`text-sm`, `md:text-xs`, `text-neutral-500`), underline on hover.

### Stat item
Number (`font-medium tabular-nums`, `text-2xl md:text-3xl`) over a `{colors.ink-muted}` caption.

### Data table
The Model pricing table on Pricing has bordered rounded container, header row at weight 600, 14px cells, row dividers in `{colors.hairline}`, and right-aligned numeric columns. No component token is declared for it because no table role was extracted.

## Design System Architecture

No public Ollama design system, brand guideline or website token package was found; the searches are listed in SOURCES.json and returned only third-party logo hosts and aggregator pages, which are not used. What the shipped site shows:

- Server-rendered HTML styled with **Tailwind CSS**: the pages link https://ollama.com/public/tailwind.css, and elements carry Tailwind utilities (`bg-neutral-900`, `rounded-full`, `text-neutral-500`, `rounded-md bg-indigo-50`). Interactivity uses htmx (`/public/vendor/htmx/bundle.js`) and code highlighting uses Prism (`/public/vendor/prism/prism.css`), both visible in the homepage source at https://ollama.com.
- Custom CSS on top of Tailwind: a `px-gutter` utility defined with `clamp()`, a `.font-rounded` utility and typography-plugin variables for prose and `kbd`.
- No named brand custom properties on `:root`; only Tailwind's internal `--tw-*` variables were measured. The palette therefore follows Tailwind's neutral, blue and indigo scales plus one arbitrary value (`#ddf4ff`, written `bg-[#ddf4ff]` in the Library markup).
- The Ollama software repository is https://github.com/ollama/ollama; a repository for the website itself was not found.

## Do's and Don'ts

### Do
- Do keep the base neutral: `{colors.ink}` on `{colors.canvas}`, with `{colors.ink-muted}` for secondary text.
- Do make the primary action a filled `{colors.ink}` pill and darken to `{colors.ink-black}` on hover.
- Do separate content with 1px `{colors.hairline}` borders and `{colors.code-surface}` fills instead of shadows.
- Do reserve color for functional metadata (model-size and capability tags).
- Do show the install command as copyable monospace text.
- Do render partner logos grayscale at reduced opacity.

### Don't
- Don't add a brand hue or gradient; none was measured.
- Don't use shadows; none were measured on any page.
- Don't use weights above 600, and keep headline tracking negative.
- Don't use square or small-radius buttons; the button radius is the pill.
- Don't describe the SF Pro Rounded utility as the body face; the dominant family is the system stack.

## Responsive Behavior

- **Breakpoints.** The markup uses `sm:`, `md:` and `lg:`. The home headline moves from 20px (`{typography.display-mobile}`) to 22px (`{typography.display}`) at `md`; the paragraph from 18px to 20px.
- **Header.** Below `lg` the header is `sticky top-0` and the markup includes a full-screen white menu overlay with links at `text-3xl`.
- **Logo grid.** Three columns on mobile, six from `sm`.
- **Stats.** Numerals `text-2xl` on mobile, `md:text-3xl` from `md`; captions `text-xs` then `sm:text-sm`.
- **Library tags.** `text-xs` on mobile, 13px from `sm`.
- **Footer.** Stacks and centers below `md`; copyright moves below the links on mobile (`order-2`).
- **Touch targets.** Buttons are 44px tall at every measured size.

## Iteration Guide

1. Begin with `{colors.canvas}` and `{colors.ink}`; add `{colors.ink-muted}` for captions.
2. Build the action as `{components.button-primary}` (or `{components.button-pricing}` inside cards); hover to `{colors.ink-black}`.
3. Titles: `{typography.display}` for the home headline; larger page titles use `{typography.display-pricing}`, `{typography.display-download}` or `{typography.heading-library}`.
4. Cards: `{components.pricing-card}`; no shadows.
5. Tags only for model metadata, using `{components.model-tag}` and `{components.model-tag-indigo}`.
6. Verify: pill radius on buttons, 16px on cards, 6px on tags, no shadows, no extra hues.
7. Voice: plain declarative sentences ("Your prompts are never stored or trained on."), numbers with plus signs, dollar prices stated directly, no exclamation marks.
