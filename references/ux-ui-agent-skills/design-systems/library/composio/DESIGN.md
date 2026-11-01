---
version: alpha
name: Composio
category: "Backend, Database & DevOps"
description: "Composio's homepage alternates a warm near-black DEV surface (#0f0f0f) and an off-white FOR YOU surface (#f6f6f6) with square-cornered white-fill mono buttons (JetBrains Mono 14px), Geist headlines at 64px/400 with -1.6px tracking, and a single electric blue accent."
colors:
  canvas: "#f6f6f6"
  page-largest: "#0f0f0f"
  ink: "#0f0f0f"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-on-dark-muted: "#ffffff80"
  ink-on-dark-soft: "#ffffffcc"
  ink-on-dark: "#ffffffd9"
  wash-on-dark: "#ffffff14"
  hairline: "#ffffff1a"
  button-secondary-bg: "#0007cd"
  text-input-border: "#2c2c2c"
  card-dark: "#080808"
  brand-blue: "#51a2ff"
  brand-ink: "#0b6fd6"
  border-light: "#eaeaea"
  card-dev: "#1e1e1e"
typography:
  display:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 69.12px
    letterSpacing: "-1.6px"
  display-mobile:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 29.15px
    fontWeight: 400
    lineHeight: 31.482px
    letterSpacing: "-0.72875px"
  heading:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48.4px
    letterSpacing: "-1.1px"
  subheading:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  body:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  button:
    fontFamily: "\"JetBrains Mono\", \"JetBrains Mono Fallback\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: "-0.154px"
  nav:
    fontFamily: geistSans, "geistSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 7px
  lg: 12px
  xl: 16px
  2xl: 18px
  3xl: 20px
  4xl: 22px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 9.56px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 45px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 44px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 8px
    transform: matrix(1, 0, 0, 1, 0, 36)
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 44px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-dark}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.pill}"
    padding: 9.5625px
    boxShadow: rgb(153, 149, 142) 0px 0px 0px 1px inset, rgb(86, 83, 79) 0px 0px 0px 3px inset, rgba(0, 0, 0, 0.25) 0px 18px 35px -20px
    clipPath: inset(0px -60px 50%)
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
---

## Overview

Composio's homepage (measured at `https://composio.dev/`, desktop 1280px and mobile 390px) is a sharp-cornered, mono-labelled developer-tool page that flips between a warm near-black ground (`{colors.page-largest}`) and an off-white ground (`{colors.canvas}`) section by section. Composio's own Brand Hub (https://brand.composio.dev/guidelines) names these two surfaces "FOR YOU" (light) and "DEV" (dark) and says the interface is "achromatic": black, white and surface tokens carry the UI, and a single blue is a spot color at "roughly 7% of what you see".

The capture shows, top to bottom: a full-width deep-blue announcement bar ("Composio is now live in the ChatGPT Plugins Directory." plus "TRY IT OUT" with an arrow in mono); a dark navigation bar with the white Composio logo, mono uppercase links (PRODUCTS, SOLUTIONS, RESOURCES, DEVELOPERS) and two buttons, an outlined "LOG IN" and a white "GET STARTED — FREE"; a dark hero with pixelated purple-blue light streaks at both edges, a small "WORKS WITH" chip of tool icons, a two-line Geist headline "Give your AI secure access to 1,500+ apps in minutes" with "in minutes" set on a solid blue block, a grey subline, a white "GET STARTED FOR FREE" button next to an outlined "GET A DEMO", and a "TRUSTED BY" logo row (aws, Google, WIX, Browser Use). Then a light band ("Composio turns your AI into a doer") with two phone mock-ups linked by a thin blue line through a white action-list card, followed by a dark band ("Everything between the ask and the result, handled") with numbered mono tabs and a bright blue gradient screenshot.

**Key Characteristics:**
- Two-surface system, no mixing inside a section: dark `{colors.page-largest}` for DEV, `{colors.canvas}` for FOR YOU.
- Zero radius on buttons, inputs and chips (`{rounded.none}`); the only rounding in the first screens is on phone mock-ups and illustration.
- Primary CTA is a white fill with black label on dark (`{colors.primary}` / `{colors.on-primary}`), in JetBrains Mono 14px (`{typography.button}`).
- Geist-based sans that never goes bold: `{typography.display}` is 64px weight 400, `{typography.heading}` is 44px weight 400.
- Mono uppercase "eyebrow" labels and chip text for chrome, tabs and buttons.
- White-alpha text ladder on dark (`{colors.primary}` at 100%, and alpha values 85%, 80%, 50%) instead of separate grey hues.
- One saturated moment per view: a pure blue block behind "in minutes" and the blue announcement bar.

## Colors

Measured values come from `web/data/extracted/composio.json`. The Brand Hub (https://brand.composio.dev/colors, JSON at `/colors/agent.json`, and `/guidelines.md`) publishes the intended system, and where the two differ it is called out below.

### Surfaces
- **Canvas** (`{colors.canvas}`): the off-white page background; Brand Hub "Background" light value `#f6f6f6`.
- **Page largest / ink** (`{colors.page-largest}`, `{colors.ink}`): warm near-black, the dark surface and the heading color on light; Brand Hub "Background" dark and "Foreground" light, `#0f0f0f`.
- **Card dark** (`{colors.card-dark}`): the near-black used on the mock-up card (measured). The Brand Hub names a different dark card surface (`{colors.card-dev}`, "Card" dark value) for components.
- **Hairline** (`{colors.hairline}`): 10% white line on dark.
- **Text-input border** (`{colors.text-input-border}`): dark grey input stroke; matches the Brand Hub dark "Border" value.
- **Border light** (`{colors.border-light}`): the Brand Hub light-surface hairline.

### Text on dark
- `{colors.primary}`: full white for headlines and the hero subline.
- `{colors.ink-on-dark}`: 85% white.
- `{colors.ink-on-dark-soft}`: 80% white for nav text.
- `{colors.ink-on-dark-muted}`: 50% white for secondary copy and trust labels (the most-read text color on the page by character count).
- `{colors.wash-on-dark}`: 8% white fill for subtle wells.

### Brand blue
- **Measured**: `{colors.button-secondary-bg}` is a deep electric blue (`#0007cd`) used for the announcement bar, the "in minutes" highlight block and the newsletter "Subscribe" button. A lighter blue (`#50a2ff`) appears on link/child text in the nav and footer.
- **Published**: the Brand Hub states "one brand blue, `#51a2ff`, and it does not flip" (`{colors.brand-blue}`), says it is a fill and never a text color on light, and gives `{colors.brand-ink}` (`#0b6fd6`) as the readable blue for links, focus rings and selected rows. It also states: "The retired dark value `#0007cd` was 1.75:1 and effectively invisible".
- **Doubt for implementers**: the live homepage still shows `#0007cd`. Treat `{colors.button-secondary-bg}` as the live-site value and `{colors.brand-blue}` as the current brand rule.
- Brand Hub gradients (all expressive-use only): Core Gradient `linear-gradient(135deg, #FDFFC2, #00FFFF, #0089FF)`, Deep Blue `#02056A` to `#0007CD`, Blue to Cyan `#0007CD` to `#00FFFF`, Mint to Cyan `#3FFFDD` to `#00FFFF`, Warm Spectrum `#FDFFC2` to `#FFA6AC`.

### Usage rules (from the Brand Hub)
- Build with neutrals; blue marks the eyebrow mark, the eyebrow label and interactive state only.
- Every primary CTA is a black fill on light or a white fill on dark; every secondary is a white fill with a black 15% hairline, or its inverse.
- Never put white text on a brand-blue fill (2.64:1 per the Brand Hub); the only legal text on the brand fill is `{colors.page-largest}`.
- Do not fill cards, sections or anything over 24px with brand blue.

## Typography

### Families
- **Geist Sans** (loaded as `geistSans`, variable 100 to 900 with a metric-matched fallback): all readable text. The Brand Hub: "Geist Sans by Vercel is the primary typeface for headings, body, and UI."
- **JetBrains Mono** (variable 100 to 800): buttons, eyebrow labels, tabs, chips, version badges and code.
- The Brand Hub offers a Geist Sans Medium TTF for download (https://brand.composio.dev/fonts/Geist-Medium.ttf); the Brand Hub credits Geist Sans to Vercel.

### Scale (measured on the live page)
| Role | Token | Font | Size / line-height | Weight | Tracking |
|---|---|---|---|---|---|
| Hero h1 | `display` | Geist | 64px / 69.12px | 400 | -1.6px |
| Hero h1, mobile | `display-mobile` | Geist | 29.15px / 31.482px | 400 | -0.72875px |
| Section h2 | `heading` | Geist | 44px / 48.4px | 400 | -1.1px |
| Feature h3 | `subheading` | Geist | 28px / 33.6px | 400 | normal |
| Body | `body` | Geist | 14px / 16.8px | 400 | normal |
| Button | `button` | JetBrains Mono | 14px / 21px | 400 | -0.154px |
| Navigation / input | `nav` | Geist | 16px / 24px | 400 | normal |

The Brand Hub scale (`/typography/agent.json`) is the rule behind these: display 64px desktop (36px mobile) weight 400, tracking -0.025em; h1 44px weight 400; h2 24px weight 500 (the only medium heading); body 16px, body-sm 14px, caption 12px; mono-sm 11px for uppercase eyebrow labels. The live mobile h1 measured 29.15px, a fluid value rather than the hub's fixed 36px.

### Principles
- "Sans never goes bold": 400 for display and headings, emphasis comes from size.
- Display tracking is -0.025em (64px gives -1.6px, 44px gives -1.1px).
- Mono labels are uppercase with wide tracking and show category, state and actions.

### Font substitutes
If Geist is unavailable, Inter at 400 with -0.025em tracking is the closest common fallback; for mono keep JetBrains Mono or fall back to a system monospace.

## Layout

- The Brand Hub sets a `1240px` content max width, with 720px for long-form columns, 520px for forms and 380px for single CTAs.
- Heroes are centered: badge chip, two-line headline, centered subline, two buttons, a small free-tier note ("100,000 free actions included every month."), a trust row.
- Light feature bands center a heading and one-line subhead above a diagram; the diagram spans two phones and a center card on a thin connector line.
- Chip rows ("We work with the AI tools you already use": Claude & Cowork, ChatGPT, Grok Bot, Claude Code, Codex, Hermes, Your harness, "+ more") are centered and wrap.
- The dark feature band is a three-part layout: a left column of numbered tabs (01 NO CONTEXT BLOAT, 02 BETTER EVERY TIME, 03 ONE-CLICK CONNECTIONS, 04 AGENT RUNTIME), a wide blue gradient image panel, and a right column with the active heading and paragraph.
- Spacing tokens run 2px to 16px in the measured list (`spacing.s1` to `spacing.s10`); buttons use `12px 24px` and inputs `0px 12px`.

## Elevation & Depth

- Surfaces are separated by color and hairlines, not shadows. The Brand Hub: "Elevation has one signature: a two-layer card shadow (`shadow-elevated`) for primary surface cards".
- The measured phone card carries inset 1px and 3px ring-like shadows (`rgb(153, 149, 142)` and `rgb(86, 83, 79)`) plus an 18px-offset drop shadow at 25% black, which gives the device bezel its metal edge.
- Hero atmosphere comes from the glowing pixel streaks at both edges, not from gradients behind text.

## Shapes

- `{rounded.none}`: all buttons, inputs, nav links, chips; this is the signature (square, ergonomic, "chrome" look).
- `{rounded.pill}`: reserved for the phone mock-up outline measured as a card.
- Other measured radii (`{rounded.xs}` 4px to `{rounded.4xl}` 22px) appear on small icons, app tiles and illustration, not on controls.
- Thin 1px outlines (about 30% white on dark) define secondary buttons and chips.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.primary}` fill, `{colors.on-primary}` label, JetBrains Mono 14px uppercase text, `12px 24px` padding, 45px tall, square corners. Used for "GET STARTED FOR FREE".
- **Outlined**: transparent with a 1px white-alpha border (`#ffffff4c`), white mono label, `6px 8px` padding in the nav ("LOG IN"); hover adds an 10% white fill (measured).
- **Secondary** (`button-secondary`): `{colors.button-secondary-bg}` fill with white label, 44px tall, `0px 20px` padding ("Subscribe").
- A "GET STARTED — FREE" arrow variant sits in the nav in white.

### Navigation
- Dark bar; the white logo at left; mono uppercase links with small chevrons for menus; right-aligned outlined and white buttons.
- Announcement bar above in blue with a mono arrow link.

### Inputs
- `text-input`: `{colors.page-largest}` fill, 1px `{colors.text-input-border}` border, white 16px Geist, `0px 12px` padding, 44px tall.

### Chips and tabs
- Chips: 1px hairline border, mono 12px to 13px label, square, in white on light and `{colors.wash-on-dark}` on dark; the "+ more" chip is inverted (black fill).
- Numbered tabs: mono `01` badge plus uppercase label, active tab has a blue-filled index square and a blue-outlined row.

### Cards
- Phone mock-up cards and white action-list cards on the light band; the dark `{colors.card-dark}` card holds the app UI (chat text, a "Using Composio" pill). Card text color is dark `{colors.page-largest}`.

### Footer
- Dark `{colors.page-largest}` with a newsletter heading, an input and the blue "Subscribe" button, plus link columns.

## Imagery & Art Direction

- **Electric streaks**: the hero background is made of pixelated, glowing purple-to-blue beams entering from the left and right edges on a near-black ground. They echo HEX's brief of "high-saturation beams, intense light, motion, and pace". Keep the center clear for the headline.
- **Blue gradient panels**: the dark feature band's screenshot sits on a saturated cyan-to-blue gradient field (consistent with the Brand Hub "Blue to Cyan" and "Core Gradient" definitions), with a dark translucent command-palette card on top that lists tool actions such as SENTRY_LIST_ISSUES and LINEAR_CREATE_ISSUE with "MATCH" tags.
- **Phone mock-ups**: realistic black-bezel phones at 9:41 showing a chat request on the left ("Save yesterday's Instagram stats to my sheet.") and the resulting spreadsheet on the right, connected via a white action-list card with check marks.
- **App logos** are used at full color (Instagram, Google Sheets, Claude, GitHub, Slack, Gmail) inside white rounded tiles with soft shadows; customer logos stay monochrome.
- **Icons** are Lucide per the Brand Hub (https://brand.composio.dev/icons).
- **Code surfaces** stay dark (`{colors.card-dev}`, "never pure black") on DEV and light on FOR YOU, with a github-dark-style syntax palette accented by brand blue, per the Brand Hub code-block page.

## Microcopy Voice

- The Brand Hub voice rules: "Clear over clever", "Technical, not cold", "Confident, not loud".
- Headlines state the outcome in plain terms: "Give your AI secure access to 1,500+ apps in minutes", "Composio turns your AI into a doer", "Everything between the ask and the result, handled".
- Sublines are short and conversational: "Then watch it go from chatting to doing."
- Buttons and labels are uppercase mono verb phrases: "GET STARTED FOR FREE", "GET A DEMO", "LOG IN", "READ THEIR STORIES".
- Reassurance lines sit under CTAs: "100,000 free actions included every month."
- Specific numbers and names carry credibility: "1,500+ apps", "Claude, ChatGPT, Hermes".

## Interaction States

- Outlined buttons (LOG IN) get an 10% white fill on hover; the border stays at 30% white (measured).
- Brand Hub rule: on light, brand hover and active darken the blue (`#3590f5`, `#1f7ee8`); on dark they stay `#51a2ff`.
- Focus rings and selected rows use blue (ink blue on light surfaces) per the Brand Hub.
- Active tab: blue-filled index square with a blue outline row; inactive tabs are dim grey on dark with a thin border.

## Page Section Inventory

1. Announcement bar: blue (`#0007cd`), mono small text with an arrow link.
2. Navigation: dark, mono uppercase, two buttons.
3. Hero: dark with streak art; headline, subline, two buttons, free-tier note, trust row with "READ THEIR STORIES".
4. "Turns your AI into a doer" band: light; centered heading and subline, phone diagram, three use-case pills (Track post stats, Evening agenda, Daily ship log), a note "You choose which apps your AI can connect to. Disconnect anytime.", and the tool chip row.
5. "Everything between the ask and the result, handled" band: dark; subhead paragraph at 14px to 16px, numbered tabs, gradient image panel, and a right-hand explainer ("01 The right actions, without the context bloat").
6. Footer: dark, newsletter signup and link columns.

## Design System Architecture

Composio publishes its brand and design rules at the **Brand Hub**, https://brand.composio.dev, with a machine-readable index at https://brand.composio.dev/llms.txt, a markdown rulebook at https://brand.composio.dev/guidelines.md, and per-page JSON (for example https://brand.composio.dev/colors/agent.json and https://brand.composio.dev/typography/agent.json). It documents logo, color, type, layout, voice, Lucide icons, code-block themes (dark `#1e1e1e` "never pure black"), textures, chart and social templates. The central idea: "Write things once and let the surface decide how they look" — one identity whose tokens flip between FOR YOU (light) and DEV (dark).

The identity was created by the studio HEX with Primary Studio on the logomark (https://www.hex.inc/work/composio): "rooted in electricity", with "high-saturation beams, intense light, motion, and pace" and artwork drawn from "agentic reasoning, orchestration, and problem-solving diagrams". That explains the pixel-streak hero art and the blue gradient panels.

The shipped site CSS is a Tailwind-style utility layer (`--tw-*` variables); the semantic tokens named in the Brand Hub (`--brand`, `--brand-ink`, `--brand-on-brand`, `--accent`, `shadow-elevated`) describe the intended tokens in the product repos.

## Do's and Don'ts

### Do
- Pick one surface per section and commit to it; flip the whole section rather than placing a dark card on a light section.
- Use white fill CTAs on dark and black fill CTAs on light, with square corners.
- Keep sans at 400 (display, h1) with -0.025em tracking; use size for emphasis.
- Use mono uppercase for eyebrows, buttons, tabs and badges.
- Spend blue only on the eyebrow mark/label and interactive state, and on one highlighted phrase in a hero.
- Show customer and tool logos in monochrome rows.

### Don't
- Don't round buttons or inputs.
- Don't bold the sans typeface.
- Don't set text in the brand blue on light; use the readable ink blue.
- Don't put white text on a blue fill; the Brand Hub rates that pairing 2.64:1.
- Don't fill large areas with blue.
- Don't mix light and dark within a section.
- Don't use pure black or pure white for page grounds; the grounds are warm near-black and off-white.

## Responsive Behavior

- Measured at 1280px and 390px. The hero h1 goes from 64px to 29.15px (`{typography.display}` to `{typography.display-mobile}`); line-height remains about 1.08 of size.
- The Brand Hub states display 64px / 36px and h1 44px / 24px for desktop / mobile and defines a 720px long-form width and 520px form width.
- Mobile stacking of the three-part dark band and the phone diagram was not captured and is unspecified.
- Buttons stay square at all widths.

## Iteration Guide

1. Choose the section's surface first: `{colors.page-largest}` (DEV) or `{colors.canvas}` (FOR YOU).
2. Set the headline in Geist 400, display 64px or heading 44px, tracking -0.025em.
3. Add mono uppercase buttons: white fill on dark, black fill on light, square corners.
4. Add one eyebrow or tab label in mono; use white-alpha steps for secondary text on dark.
5. Place one expressive element per view (blue block, streak art, gradient panel), never several.
6. For links and focus on light, use `{colors.brand-ink}`; keep `{colors.brand-blue}` for fills.
7. Compare with the capture: square, achromatic, mono-labelled, with a single electric accent.
