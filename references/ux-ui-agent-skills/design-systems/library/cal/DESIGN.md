---
version: alpha
name: Cal.com
category: "Productivity & SaaS"
description: "Cal.com is a grayscale scheduling brand: a #f4f4f4 page with white (#ffffff) rounded cards, near-black #242424 ink and CTA fills, #898989 secondary text, the open-source Cal Sans display face (64px/600, tight 1.1 leading) over Cal Sans UI Variable Light body, 12px card corners and a single #0099ff accent used sparingly."
colors:
  canvas: "#f4f4f4"
  page-largest: "#ffffff"
  ink: "#242424"
  primary: "#0099ff"
  surface-soft: "#f5f5f5"
  ink-muted: "#898989"
  ink-soft: "#292929"
  ink-strong: "#111111"
  ink-slate: "#374151"
  hairline: "#14141426"
  ink-black: "#000000"
typography:
  display:
    fontFamily: "\"Cal Sans\", \"Cal Sans Placeholder\", sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 70.4px
  display-mobile:
    fontFamily: "\"Cal Sans\", \"Cal Sans Placeholder\", sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
  heading:
    fontFamily: "\"Cal Sans\", \"Cal Sans Placeholder\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
  subheading:
    fontFamily: "\"Cal Sans UI Variable Light\", \"Cal Sans UI Variable Light Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 23.4px
    letterSpacing: "-0.2px"
  body:
    fontFamily: "\"Cal Sans UI Variable Light\", \"Cal Sans UI Variable Light Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: "\"Cal Sans UI Variable Light\", \"Cal Sans UI Variable Light Placeholder\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
    letterSpacing: "-0.2px"
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 6.94px
  xl: 7px
  2xl: 8px
  3xl: 10px
  4xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.78px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.2xl}"
---

## Overview

Cal.com (the open-source Calendly alternative) presents its scheduling product on a quiet, almost monochrome page. The home page captured at `web/data/captures/cal.jpg` opens with a floating white navigation pill (Cal.com wordmark, Solutions, Enterprise, Cal.ai, Developer, Resources, Pricing, Sign in, and a dark "Get started" button), then a large white rounded panel containing the hero: a small "Cal.com launches v6.9" badge, the headline "The better way to schedule your meetings" in Cal Sans, a grey supporting paragraph, a dark "Sign up with Google" button, a light-grey "Sign up with email" button and the reassurance "No credit card required". Beside the copy sits a live-looking booking widget with a May calendar, duration toggles (15m, 30m, 45m, 1h) and a Zoom location row; below it are Trustpilot, Product Hunt and G2 star ratings.

The rest of the page follows one repeated rhythm: a tiny pill label ("How it works", "Benefits"), a big centered Cal Sans heading ("With us, appointment scheduling is easy", "Your all-purpose scheduling app"), a grey one-line subtitle, a dark "Get started" button next to a white "Book a demo" button, and a row of white cards. The cards are numbered with small mono chips (01, 02, 03) and contain miniature UI illustrations such as an orbit of calendar integrations around a "Cal.com" chip, a weekly availability editor and a video-call window. A logo strip (Rho, deel., Framer, ramp, PlanetScale, coinbase) sits between sections, with thin hairline guides and small plus-marks at the section corners like a blueprint.

Cal.com's own design documentation states the intent in one line: the brand is "a grayscale brand to emphasise boldness and professionalism", inspired by Uber's black-and-white aesthetic, with colors "sparingly used". The measured site agrees: neutral surfaces, near-black fills, one blue (`{colors.primary}`) that only shows up in a few text spans.

**Key characteristics**
- Page canvas is a light grey (`{colors.canvas}`) with the content surfaces in white (`{colors.page-largest}`): cards float on grey.
- Primary buttons are near-black fills with white labels, not a brand color.
- Headlines use Cal Sans at weight 600 with tight line height (64px on 70.4px).
- Body copy uses a light-weight (300) Cal Sans UI variable font with slightly negative letter-spacing.
- Secondary text is mid grey (`{colors.ink-muted}`) and covers most characters on the page; this is the dominant text color by character count.
- Shadows are layered: tiny inset highlights, thin ring borders and a soft 4px/8px lift.
- Illustrations are monochrome UI fragments rather than photography or icons.

## Colors

All hex values below are measured on the live page (`web/data/extracted/cal.json`).

- **Canvas** `{colors.canvas}`: the grey page background and the largest area color on the capture.
- **Surface white** `{colors.page-largest}`: the largest-area white behind the hero panel, cards and the nav pill.
- **Surface soft** `{colors.surface-soft}`: a slightly warmer grey used for chips and inner panels.
- **Ink** `{colors.ink}`: headings and the dark CTA fill. This value is also published by the site as a CSS token (rootVars include `#242424`, `#292929` and `#898989` as the first three named color tokens).
- **Ink soft** `{colors.ink-soft}` and **ink strong** `{colors.ink-strong}`: two close near-blacks used for labels and for the "Sign in" link (`{colors.ink-strong}`).
- **Ink black** `{colors.ink-black}`: pure black used for text inside cards.
- **Ink muted** `{colors.ink-muted}`: paragraph copy, subtitles and form labels.
- **Ink slate** `{colors.ink-slate}`: cool grey-blue text on a few product widgets (a Tailwind-style slate).
- **Hairline** `{colors.hairline}`: an 15% black border used for ring outlines.
- **Accent** `{colors.primary}`: the only chromatic brand color on the measured page; it appears in a few text runs and in the site's own token list as a short `#09f`. It is not the button fill.

Other colors seen only inside product illustrations (violet, red and green status tints, Google and Zoom brand marks, gold review stars) belong to those widgets and are not part of the page palette.

### Palette rules from the official docs
- Source: design.cal.com/basics/colors states the palette is based on TailwindCSS colors with modifications, "our specific grayscale colors are used", and provides light-mode and dark-mode alias sets by class name. The hex values of those aliases are published as images only, so none are copied here.
- Source: cal.com/brand calls the palette "a precise suite of flat gray tones".

## Typography

Cal.com's official type story has two voices:
- **Cal Sans** (display): "a geometric sans serif for tough use cases" by Mark Davis (WORDMARK), open source under the SIL Open Font License, repository github.com/calcom/font. The design system says it is exclusively a display face, not for body text, and that smaller Cal Sans subheadings need positive letter spacing.
- **Cal Sans UI** (secondary): a variable family with weight, GEOM, SHRP, YTAS and optical-size axes, weights 400 to 700, optimized for interface sizes; cal.com/font names Cal Sans for punchy headlines and Cal Sans Text for running copy.
- The product-design guide (design.cal.com/basics/typography) additionally says Inter is used for body text in the product; the marketing page measured here loads Cal Sans UI Variable Light, Matter and Inter fonts, with the first dominating by character count.

| Role | Family | Size / line | Weight | Notes |
|---|---|---|---|---|
| Display | Cal Sans | 64px / 70.4px | 600 | hero headline |
| Display mobile | Cal Sans | 40px / 44px | 600 | at 390px width |
| Heading | Cal Sans | 48px / 52.8px | 600 | section titles |
| Subheading | Cal Sans UI Variable Light | 18px / 23.4px | 300 | letter-spacing -0.2px |
| Body | Cal Sans UI Variable Light | 16px / 24px | 300 | |
| Link | Cal Sans UI Variable Light | 14px / 21px | 300 | letter-spacing -0.2px |

Font substitutes: Cal Sans and Cal Sans UI are free (OFL) and available from the Cal.com font repository and on Fontsource; if neither can be loaded, use Inter for body copy and a tight-tracked geometric sans (for example Inter Display at 600) for headlines.

Principles
- Only two heading sizes carry the page (64px for the hero, 48px for sections); everything below is 14 to 18px.
- Weight 300 body on grey gives a deliberately airy, low-contrast reading texture; do not substitute 400 without checking color contrast.
- Headlines are set tight; do not add letter-spacing to display sizes.
- Roboto Mono is among the fonts loaded by the page and the 01, 02, 03 step chips read as monospace in the capture.

## Layout

- Content sits in a centered column with a white rounded panel for the hero and wide grey margins on both sides; faint vertical hairlines run down the grey margins with plus marks at the section joints.
- Sections are centered stacks: pill label, heading, subtitle, button pair, card grid.
- Card grids are three columns for the "how it works" steps and two columns for the benefits.
- The design system declares "a standardised 12 column grid as a basis for all of our layouts".
- Spacing tokens are small: `{spacing.s1}` 2px up to `{spacing.s10}` 16px for internals; the most frequent measured gap is 10px, then 4px, 8px, 12px, 16px and 24px, with 32px, 40px and 48px for larger groups.
- The nav is a floating rounded bar rather than a full-width strip.
- Density is light: copy blocks are short (one or two sentences) and each card has one illustration.

## Elevation & Depth

Shadows are built from several small layers rather than one large blur. Measured stacks:
- Inset pressed highlight: `inset 0 1px 1.9px rgba(0,0,0,0.16)`, the most common shadow on the page (buttons and fields).
- Card lift: `0 1px 5px -4px rgba(36,36,36,0.7), 0 4px 8px rgba(36,36,36,0.05)`.
- Ring plus lift: a 1px translucent ring (`rgba(34,42,53,0.1)`) added to the card lift for outlined cards.
- Top inset sheen: `inset 0 2px 0 rgba(255,255,255,0.15)` on dark buttons.
- Soft lift only: `0 4px 8px rgba(34,42,53,0.05)`.

The official design system says "shadows are an important part of our design, and should always be replicated closely" and keeps the exact definitions in its Figma file (Cal-DS - Components). Depth also comes from the grey-vs-white surface step; no gradients carry hierarchy.

## Shapes

| Token | Value | Typical use |
|---|---|---|
| `{rounded.xs}` | 2px | tiny chips, dots |
| `{rounded.sm}` | 4px | mono step chips |
| `{rounded.md}` | 6px | inputs |
| `{rounded.lg}` | 6.94px | measured widget buttons |
| `{rounded.xl}` | 7px | small pill-ish buttons |
| `{rounded.2xl}` | 8px | cards |
| `{rounded.3xl}` | 10px | inner panels |
| `{rounded.4xl}` | 12px | large containers (most frequent radius) |
| `{rounded.pill}` | 9999px | label pills and nav elements |

Larger radii (16px and 100px) also appear on the page; only the scale above is declared as tokens.

## Components

### Buttons
- **Primary dark button** ("Get started", "Sign up with Google"): fill `{colors.ink}`, white label (`{colors.page-largest}`), a pressed-looking inset sheen, a small trailing chevron on "Get started". The dark fill visually matches the ink value in the capture; the extractor did not return this button as a candidate, so its exact radius and padding are not declared.
- **Secondary light button** ("Sign up with email", "Book a demo"): very light grey or white fill with a thin ring and dark text.
- **Header "Sign in"**: a plain text link in `{colors.ink-strong}`, 14px Cal Sans UI.

### Pills and badges
- Small rounded labels above headings ("How it works", "Benefits", "Cal.com launches v6.9 >") with an icon and 12px text.

### Cards
- White (`{colors.page-largest}`), text `{colors.ink-black}`, radius `{rounded.2xl}`, a small mono step chip, a title in 16-18px, a grey description and a miniature UI illustration anchored at the bottom edge and clipped by the card.

### Booking widget (hero)
- Duration segmented control, a month calendar with grey day tiles and a dark selected day, host avatar, title and description. This is product UI shown as marketing art.

### Navigation
- Floating white bar with centered links with chevrons for dropdowns; right-hand Sign in and Get started.

### Logo strip
- Customer logos in monochrome, left-aligned label "Trusted by fast-growing companies around the world".

## Design System Architecture

Cal.com publishes its design system at design.cal.com, opened for this file:
- **Basics** (https://design.cal.com/basics): Colors, Typography, Shadows, Grid, Icons, Breakpoints (the index at design.cal.com/llms.txt lists these plus Assets: logos, backgrounds, covers, badges, thumbnails, OG images, screenshots, illustrations, apps).
- **Colors** (https://design.cal.com/basics/colors): grayscale-first, Tailwind-based, light and dark class-name aliases.
- **Typography** (https://design.cal.com/basics/typography): Cal Sans for headings (Title 1, 2, 3 at 28px, 24px, 20px) and Inter for body (16px, 14px, 12px and 10px steps; 12px multiline is monospace).
- **Grid** (https://design.cal.com/basics/grid): standardised 12-column grid.
- **Shadows** (https://design.cal.com/basics/shadows): defined in the Cal-DS Figma file.
- **Brand page** (https://cal.com/brand): logo is the wordmark "Cal.com" in Cal Sans, dark variant is default; icon doubles as favicon; icons come from the Lucide set (1,701 icons); component library coss.com UI built on Base UI.
- **Fonts** (https://cal.com/font): Cal Sans UI version 2.0, with four families (UI, A11y, Base, Geo) on variable axes, OFL licensed.

The marketing site itself is a separate build (its CSS variable names are generated per-token identifiers) that reuses the same grayscale and type; the product app follows the documented Inter-plus-Cal-Sans system. This file describes the marketing site as measured.

## Imagery, Voice and Density

### Imagery and art direction
- No photography on the first screens: the hero art is a product widget (calendar, durations, Zoom row), and feature cards hold simplified UI illustrations drawn in greys.
- Brand ratings (Trustpilot, Product Hunt, G2) are the only saturated color on the capture, shown as small star rows with their own logos.
- The wordmark "Cal.com" is set in Cal Sans; the official brand page says the dark version is the default.
- Decorative structure comes from hairline guides and plus marks at section corners, reinforcing the grid.
- Customer logos are rendered as flat monochrome wordmarks (Rho, deel., Framer, ramp, PlanetScale, coinbase).

### Microcopy voice
- Plain, benefit-first headlines: "The better way to schedule your meetings", "With us, appointment scheduling is easy".
- Subtitles are one sentence: "Effortless scheduling for business and individuals, powerful solutions for fast-growing modern companies."
- Step cards use imperative titles: "Connect your calendar", "Set your availability", "Choose how to meet".
- Reassurance copy under buttons: "No credit card required".
- Calls to action are short and repeated: "Get started", "Book a demo", "Sign up with Google", "Sign up with email".
- Benefit cards are written as outcomes: "Avoid meeting overload", "Stand out with a custom booking link".

### Density
- Low density: one heading, one sentence, one button pair per section, then three or two cards.
- Cards are tall relative to their copy because the illustration takes the lower half.
- Spacing between a heading and its subtitle is tight; spacing between sections is large.

### Interaction cues visible in the capture
- Dropdown chevrons follow Solutions, Developer and Resources in the nav.
- The calendar shows a selected day as a dark tile and available days as grey tiles; unavailable days are plain text.
- Buttons carry trailing chevrons to signal forward motion.
- A toggle row in the availability card shows on and off states with a dark filled switch.

### Page rhythm in the capture
1. Floating nav pill on grey.
2. White hero panel with split copy and widget.
3. Logo strip on grey with guide lines.
4. Pill label, heading, subtitle, buttons, three numbered cards.
5. Pill label, heading, subtitle, buttons, two benefit cards.

## Do's and Don'ts

**Do**
- Keep the page grey and the cards white; let near-black do all the emphasis.
- Use Cal Sans for display sizes only, tightly set; use a light UI face for body.
- Use `{colors.ink-muted}` for supporting copy and keep it short.
- Stack small shadows (inset highlight, hairline ring, soft lift) instead of one large blur.
- Pair a dark primary button with a light secondary beside it.
- Illustrate with monochrome fragments of the product UI.

**Don't**
- Don't introduce a brand color for buttons; the blue accent is reserved for rare text runs.
- Don't use Cal Sans for paragraphs, and don't add positive tracking to display headings.
- Don't use heavy colored gradients or stock photography.
- Don't mix more radii than the declared scale; 12px for large containers and 8px for cards are the anchors.
- Don't use pure black for page text; `{colors.ink}` is the reading color.

## Responsive Behavior

Only the 390px mobile h1 was measured; layout collapse behavior is not documented in the public text sources, so none is asserted here beyond what follows.
- The official design system lists a Breakpoints section; its numeric values are not published as text.
- The measured mobile headline keeps Cal Sans 600 and drops to 40px on a 44px line.
- The display headline steps from 64px to 40px at a 390px viewport; line height tracks at 1.1.

## Iteration Guide

1. Start with canvas (`{colors.canvas}`), white surface (`{colors.page-largest}`) and ink (`{colors.ink}`); the page should already look like Cal.com.
2. Set headings in Cal Sans 600, 64px then 48px, with 1.1 line height.
3. Add one dark primary button and one light secondary button per section; never more than two.
4. Add cards at 8px radius with a stacked-shadow, and clip illustrations to the card's bottom edge.
5. Use the pill label above each heading to name the section; keep it 12px.
6. Keep supporting copy in `{colors.ink-muted}` at weight 300; check contrast on the grey canvas before shipping.
7. Reserve `{colors.primary}` for small inline emphasis only.
