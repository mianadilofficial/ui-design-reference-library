---
version: alpha
name: Typeform
category: "Product & SaaS"
description: "Typeform's home page is a dark aubergine #2a222b canvas with off-white #faf9fb text, a 64px Tobias serif display headline at -1px tracking, Twklausanne sans for body (20px/24px) and UI, light #faf9fb buttons with #2a222b labels and 12px radius, lilac purple accents (#a25fba, #eccffa) with soft purple glows, and 24px-radius cards on a pale #faf9fb section."
colors:
  canvas: "#2a222b"
  page-body: "#faf9fb"
  ink: "#faf9fb"
  primary: "#faf9fb"
  on-primary: "#2a222b"
  surface-hover: "#eeecee"
  surface-dark-hover: "#3e3040"
  white: "#ffffff"
  lilac: "#eccffa"
  purple: "#a25fba"
  purple-tint: "#f9f2fd"
typography:
  display:
    fontFamily: Tobias
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70.4px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: Tobias, "Times New Roman", sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
    letterSpacing: "-1px"
  footer-label:
    fontFamily: "\"Twklausanne 400\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  body:
    fontFamily: "\"Twklausanne 400\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Twklausanne 500\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: "\"Twklausanne 400\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
rounded:
  xs: 8px
  sm: 12px
  md: 12.5px
  lg: 13.54px
  xl: 17.58px
  2xl: 18.05px
  3xl: 23.43px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 0.5px
  s2: 1px
  s3: 4px
  s4: 6px
  s5: 6.08px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 24px
    height: 48px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.surface-hover}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 40px
  button-outline:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 24px
    borderColor: "{colors.canvas}"
  button-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 20px
    height: 40px
    borderColor: "{colors.page-body}"
  button-dark-hover:
    backgroundColor: "{colors.surface-dark-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(173, 158, 177, 0.07) -10px -10px 20px -10px inset, rgb(37, 28, 39) 10px 10px 20px -9px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.footer-label}"
---

# Typeform

## Overview

Typeform makes conversational forms and, on the current home page, positions itself as "AI forms & automation". The measured page (typeform.com, 1280px wide, 8325px tall) is mostly dark: the header, hero and two of the main content chapters sit on a deep aubergine `#2a222b`, with off-white `#faf9fb` text. A lilac announcement strip runs across the very top ("Connect Claude, ChatGPT, or any MCP-ready assistant to your Typeform account"), followed by the dark navigation bar with the Typeform symbol and wordmark, five menu items (Platform, Solutions, Resources, Pricing), "Log in", an outlined "Contact sales" and a light "Sign up".

The hero is centred: a small uppercase eyebrow, the two-line serif headline "Your favorite forms. Now with AI automation." set in Tobias, a short sans-serif paragraph and a light "Get started—it's free" button. Beneath it, three tab-like cards labelled ASK, ACT and LEARN (Intelligent Forms, Growth Flow, Research Flow) sit above a large product vignette — floating chips such as "Send follow-up email", "Enrich contact data" and "Add new contact" over a glowing violet light source that bleeds into a soft radial purple haze. The page then fades through a purple gradient into a pale lilac-white section ("Build forms at the drop of a prompt") with dark text and icon-led feature columns, returns to aubergine for "When the form ends, the flow begins…", then closes with a customer-logo strip, large pale customer-story cards, an integrations logo wall and a dark final call to action ("AI forms and automation. All in Typeform.").

The art direction is moody and editorial: a classical serif against a neutral grotesk, dark backgrounds lit by purple glows, and product UI shown as floating cards rather than full screenshots. Microcopy is friendly and short — "Get started—it's free", "Explore forms", "Read all customer stories".

## Colors

Values come from the rendered page (`web/data/extracted/typeform.json`). Every colour below also appears in the site's own CSS primitives, named `--_colour-primitives---primitives--{family}--{step}`.

- **canvas `#2a222b`** — aubergine-black, the largest painted area (10671) and `neutral--1000`. The site's semantic tokens use it as `text-colour-primary` and `surfaces--invert-idle`.
- **page-body `#faf9fb`** — the body background and `neutral--25`, used for light sections, light buttons and all light text on dark (`text-colour-invert`).
- **ink `#faf9fb`** — the most-read text colour on this page (2534 characters), because most copy sits on aubergine. Dark copy on light sections is `#2a222b` (1422 characters).
- **primary `#faf9fb`** with **on-primary `#2a222b`** — the measured main CTA is a light button with a dark label. In the site's token layer this is the `button--secondary` pair (`secondary-bg-idle` = neutral-25, `secondary-text` = neutral-1000); on dark pages it acts as the primary action.
- **surface-hover `#eeecee`** — `neutral--100`, the light button's hover fill (`button--secondary-bg-hover`).
- **surface-dark-hover `#3e3040`** — `neutral--900`, the hover fill of the dark outlined "Contact sales" button and the fill of the announcement strip area measured above the header.
- **purple `#a25fba`** — `purple--600`, the eyebrow text colour (`text-colour--eyebrow-colour`) and `button--tertiary-hover`.
- **lilac `#eccffa`** — `purple--300`, light purple text on dark.
- **purple-tint `#f9f2fd`** — `purple--100`, the text colour of tags such as "NEW".
- **white `#ffffff`** — a small amount of pure white text and surfaces (`surfaces--foreground-idle`).

The purple glows around feature icons use `rgb(221, 183, 240)`, `rgb(182, 109, 213)` and `rgb(162, 95, 186)` — `purple--400`, `--500` and `--600` — as 15px blur shadows. The dark-to-light transition below the hero was sampled as bands `#312634`, `#392a3d`, `#44304a`, then `#ebd8f2`, `#efe1f4`, `#f3eaf6` into the `#f7f3f9` light section.

## Typography

Two families carry the page:

- **Tobias** — a serif used for display and section headlines. The CSS declares `Tobias,"Times New Roman",sans-serif` for `heading-display`, `heading-one` and `heading-two`.
- **Twklausanne** — a sans-serif loaded as separate faces named `Twklausanne 350`, `400`, `500` and `600`, each declared as its own family (`"Twklausanne 500",Arial,sans-serif`). Because the weight lives in the family name, the computed `font-weight` on buttons reads 400 even though the face is the 500 cut.

Inter is also loaded (300–700) but was not measured in rendered text.

Measured roles:

- **display** — Tobias 64px / 400 / 70.4px, -1px tracking: the hero headline (the CSS sets `heading-two-size: 4rem`).
- **display-mobile** — Tobias 48px / 400 / 52.8px, -1px.
- Section headlines in Tobias measured 48px ("When the form ends, the flow begins…") and 56px with -1.75px tracking; 36px titles introduce feature blocks and 24px titles (-0.24px) head feature columns.
- **body** — Twklausanne 400, 20px / 24px for hero and lead paragraphs. 16px is the most common size overall (2266 characters).
- **button** — Twklausanne 500, 16px with a 16px line height.
- **nav** — Twklausanne 400, 16px / 19.2px.
- **footer-label** — Twklausanne 400 at 16px / 700, uppercase, for footer column titles (PRODUCT, TEMPLATES, INTEGRATIONS, RESOURCES).

Typeform's own brand page states "Our typeface, Aperçu Pro Regular, is clear and characterful." The measured home page does not load Aperçu; it renders in Tobias and Twklausanne. Document the measured faces for web reproduction.

**Substitutes:** Tobias and Twklausanne are commercial fonts served by the site. The site's declared fallbacks are "Times New Roman" for Tobias and Arial for Twklausanne.

## Layout

The hero band spans the full width, with content from x=73 to x=1212. The light feature section measured content from x=155 to x=1125 (970px), and the dark "flow" section from x=215 to x=1125. The CSS declares `max-width--medium: 80rem` and `max-width--large: 96rem`. The extractor counted up to 3 card columns, matching the three-column ASK/ACT/LEARN tabs and the three-up feature columns.

Gaps cluster at 8px (140 uses) and 16px (96), with 32px, 12px and 20px for larger groups and 54.08px between some columns. Paddings are 16px (95) and 32px (93), with 48px, 80px and 120px for section-level spacing. Feature columns are icon + 24px title + short paragraph, left-aligned under a left-aligned block headline and an image collage.

## Elevation & Depth

Depth is created with light rather than drop shadows. Feature icons sit in small dark tiles that glow with 15px purple shadows (`rgb(221, 183, 240) 0px 0px 15px 0px`, `rgb(182, 109, 213) 0px 0px 15px 0px`, `rgb(162, 95, 186) 0px 0px 15px 0px`), and a larger `rgba(162, 95, 186, 0.3) 0px 0px 25px 0px` halo. The tab cards in the hero use a carved inset treatment: `rgba(173, 158, 177, 0.07) -10px -10px 20px -10px inset, rgb(37, 28, 39) 10px 10px 20px -9px inset`, which reads as a subtle bevel on aubergine; the active one adds `rgba(185, 109, 213, 0.2) 0px 0px 30px 0px`. The hero art itself is a radial violet glow fading to aubergine.

## Shapes

- **24px** — the dominant radius (99 uses): cards, image panels and customer-story tiles. The CSS token `corner-radius--md` is 1.5rem.
- **12px (sm)** — buttons and hero tab cards (`corner-radius--sm: .75rem`). On hover, the "Contact sales" button's radius measured 15.96px, so the corner animates on hover.
- **8px (xs)** — small tiles and icons.
- **pill** — measured as 16000px on 19 elements (`corner-radius--full: 1000rem`): tags such as "NEW" and pill toggles.
- Fractional radii (12.5px, 13.54px, 17.58px, 18.05px, 23.43px) were measured on single elements inside the product vignettes.

## Components

**Light button (primary on dark)** — `#faf9fb` fill, `#2a222b` label in Twklausanne 500 16px, 12px radius, `8px 24px` padding, 48px tall ("Get started—it's free"). Hover: `#eeecee`. The header "Sign up" is the compact version: `12px 20px` padding, 40px tall.

**Outlined light button** — the same light fill with a 1px `#2a222b` border, used on light sections ("Read all customer stories", "View integrations").

**Dark button** — `#2a222b` fill, `#faf9fb` label and 1px `#faf9fb` border, `8px 20px`, 40px tall, 12px radius ("Contact sales"). Hover: `#3e3040`. On light sections the dark button carries actions such as "Explore forms".

**Hero tab card** — aubergine, 12px radius, 24px padding, the inset bevel shadow, an uppercase label (ASK / ACT / LEARN), a title, an optional pill tag ("NEW") and two lines of copy.

**Feature column** — a glowing icon tile, a 24px title and a short paragraph.

**Customer-story card** — large pale tile with a 24px radius, the customer logo, and a serif headline stating the result ("SmartBug Media increased sales leads by 40% with one form"), arranged as a horizontal carousel with dot pagination.

**Footer** — aubergine, uppercase bold column labels, light link lists, social icons and app-store links.

## Design System Architecture

Typeform's brand page (https://www.typeform.com/brand/) describes its voice, symbol ("a blinking cursor side-by-side with a form") and default colours "Paper (white) and Ink (black)", and links a "Brand Guidelines [External]" Figma prototype. That page names Aperçu Pro Regular as the typeface, which differs from the faces the current marketing site loads.

The site's shipped CSS exposes a full token architecture as root custom properties (244 variables) in three layers:

1. **Primitives** — `--_colour-primitives---primitives--neutral--25…1000`, `--purple--25…1000`, plus lavender, blue, green and red ramps; spacers such as `--_size-and-spacing---primitives--spacers--125: 1.25rem`.
2. **Tokens** — semantic aliases: `--tokens--text-colour--text-colour-primary`, `--tokens--button--primary-bg-idle` (neutral-1000), `--tokens--button--secondary-bg-idle` (neutral-25), `--tokens--surfaces--background-idle`, `--tokens--tag--tag-bg-active`, and corner radii `xs .25rem`, `sm .75rem`, `md 1.5rem`, `lg 3rem`, `xl 5rem`, `full 1000rem`.
3. **Typography** — named styles (`heading-display`, `heading-one`…`heading-six`, `paragraph-lg`, `action-text-md`, `eyebrow`) each with font, size, line-height and letter-spacing variables, e.g. `heading-display-size: 5rem`, `heading-one-letter-spacing: -2px`.

Typeform's public GitHub organisation (https://github.com/Typeform) was checked for a design-system repository; none matching that description was found among its repositories.

## Do's and Don'ts

**Do**
- Use aubergine `#2a222b` and paper `#faf9fb` as the two poles; flip between dark and light sections.
- Set headlines in Tobias at weight 400 with negative tracking; set everything else in Twklausanne.
- Make the main action a light button on dark (12px radius); on light sections use the dark or outlined version.
- Use purple only as light: glows, eyebrows (`#a25fba`), tags and gradients.
- Round content tiles at 24px; use pills for tags.

**Don't**
- Don't make purple a solid button fill; no measured button uses it.
- Don't bold the serif — every measured Tobias line is 400.
- Don't use pure black; the darkest measured colour is `#2a222b`.
- Don't use drop shadows on cards; use glows or the inset bevel.
- Don't treat the cookie-settings row at the bottom as brand UI.

## Responsive Behavior

From the extractor's 390px mobile pass: the hero headline measured Tobias 48px / 52.8px with -1px tracking; the hero paragraph measured 16px / 20.8px (down from 20px / 24px). The "Get started—it's free" button kept its desktop size (198px wide, 48px tall, 12px radius). The content area measured from x=16 to x=374 (16px side margins). The extractor recorded a visible menu toggle labelled "open mobile navigation menu" with 2 header links still visible. The most frequent mobile sizes were 16px, 32px and 14px. Breakpoint widths were not measured.

## Iteration Guide

1. Start on `#2a222b` with `#faf9fb` text; plan alternating light (`#faf9fb` / `#f7f3f9`) sections.
2. Headline: Tobias 64px / 70.4px, -1px, centred in the hero.
3. Copy: Twklausanne 400, 20px/24px for leads and 16px for everything else.
4. Main CTA: light pill-free button, 12px radius, 48px tall, dark label; hover `#eeecee`.
5. Add atmosphere with a radial violet glow and purple icon glows rather than flat purple fills.
6. Take new values from the site's primitives (`neutral`, `purple`) only after measuring them, then run `node web/scripts/verify-designs.mjs --slug=typeform`.
