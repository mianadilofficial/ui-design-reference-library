---
version: alpha
name: ENGIE
category: "Design Systems"
description: "ENGIE's web identity is built on Lato in bold at very large sizes (72px display, 48px statements), white canvas #ffffff with near-black ink #171d21, an action blue near #007acd with a 0px-radius outlined button, deep ultramarine #182663 footers, full-bleed industrial photography in the hero, and the brand's #00aaff to #23d2b5 gradient ray, all documented by ENGIE's own Fluid design system."

colors:
  canvas: "#ffffff"
  ink: "#171d21"
  primary: "#007acd"
  on-primary: "#ffffff"
  blue-bolt: "#007bc5"
  ink-black-soft: "#232323"
  ink-slate: "#334551"
  ink-ultramarine: "#182663"
  surface-dark: "#111827"
  surface-soft: "#ebeef1"
  hairline-blue: "#7fadef"
  gradient-start: "#00aaff"
  gradient-end: "#23d2b5"
typography:
  display:
    fontFamily: Lato, "Helvetica Neue", sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: Lato, "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Lato, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: Lato, "Helvetica Neue", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  nav:
    fontFamily: Lato, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Lato, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Material Icons\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  lg: 16px
  xxl: 32px
spacing:
  sp-4: 4px
  sp-6: 6px
  sp-8: 8px
  sp-11: 11px
  sp-12: 12px
  sp-13: 13px
  sp-14: 14px
  sp-16: 16px
  sp-20: 20px
  sp-24: 24px
components:
  button-primary:
    backgroundColor: "{colors.blue-bolt}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 32px
    height: 42px
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 12px 20px
    height: 50px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 4px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-ultramarine}"
    padding: 4px 64px
---

## Overview

ENGIE's corporate site at engie.com opens with a full-bleed film still of two workers in grey overalls standing between the steel penstock pipes of a hydroelectric plant, with a French headline in large white Lato Bold: "Agir ensemble pour réussir la transition énergétique". The page is a French-language group portal (the capture shows the language switch EN / FR in the top bar, a stock ticker "EPA: ENGI", and the audience links Candidats, Investisseurs, Fournisseurs, Clients, Presse). The voice is institutional and collective ("Nous croyons en la complémentarité des énergies bas carbone..."), the imagery is documentary photography of real industrial sites and people, and the interface chrome is deliberately quiet so that the photograph and the headline carry the page.

Below the hero the canvas turns to flat white (`{colors.canvas}`) and a single oversized statement paragraph is set in Lato Bold at 48px/56px, followed by an outlined call-to-action with a chevron. The look is therefore two-register: a cinematic photographic opening with white text, then an airy white editorial field with very large type and a lot of empty space. ENGIE's own design system, Fluid, documents the same Lato typeface, the same neutral greys and the same brand blue, and the engie.com markup carries Fluid's `nj-` class prefix (for example `nj-text--md`, `nj-color--primary`, `nj-link--contextual`), so the website and the documented system are the same visual language.

## Colors

The palette is mostly neutral with one working blue. `{colors.canvas}` (#ffffff) is the page ground, `{colors.ink}` (#171d21) is the main text color and corresponds to the Fluid core token `grey-1000` in the published tokens.css. `{colors.ink-slate}` (#334551) is the secondary text/UI grey (Fluid `grey-800`), and `{colors.surface-soft}` (#ebeef1) is the light grey surface (Fluid `grey-200`). `{colors.ink-black-soft}` (#232323) and `{colors.surface-dark}` (#111827) are measured on the page as additional dark text and dark surface values.

The action color measured on the homepage is `{colors.primary}` (#007acd): it colors the outlined call-to-action's border and label and appears most often among saturated colors in the page CSS. On the Fluid button documentation the solid button is filled with `{colors.blue-bolt}` (#007bc5), which equals the core `blue-600` in the published token file. Fluid's color page calls this "Blue Bolt" the main color for text links, buttons and other action components, and warns that the older "Blue Logo" color must be used only on the logotype because it does not meet contrast requirements. The measured homepage value (#007acd) and the published token (#007bc5) differ slightly and the reason is unexplained; both are kept, with the measured one as `primary`.

Deep `{colors.ink-ultramarine}` (#182663) is Fluid's `ultramarine-900` and colors footer text on the capture. `{colors.hairline-blue}` (#7fadef) is a measured border color. The brand gradient runs from `{colors.gradient-start}` (#00aaff) to `{colors.gradient-end}` (#23d2b5); Fluid states it is reserved for the gradient ray and decorative elements, never for text or flat backgrounds, because it fails the 4.5 text and 3.1 interactive contrast ratios.

## Typography

Everything is set in Lato. The display role is Lato Bold at 72px with 72px line height on desktop and 32px/40px on a 390px mobile viewport (`{typography.display}`, `{typography.display-mobile}`). The oversized statement under the hero is 48px/56px Bold (`{typography.body}`) and sub-headings are 20px/28px Bold. Navigation links in the top bar are 14px/21px regular (`{typography.nav}`); the Fluid button text measured on the documentation page is 14px/24px regular (`{typography.button}`). The homepage's outlined button reports a Material Icons font at 16px because the extractor read the chevron icon glyph's styling (`{typography.button-secondary}`), not the label.

Fluid's typography page names Lato for all digital content and Roboto Mono for numbers and code, and lists Clan Pro and Right Grotesk as brand fonts that must not be used in digital applications. Its type scale runs from Display 2XL (88px) through Display XL (72px), Heading XL to XS (36 down to 20px) and Text L to XS (18 down to 12px). Lato is free from Google Fonts, so no substitute is needed.

## Layout

The homepage is a single column of full-width bands. The header is a thin dark bar with the "L'univers d'ENGIE" globe link, the share ticker and audience links, then a second row with the white ENGIE logotype at left and search plus a "MENU" hamburger at right, both floating over the hero. Text blocks sit on a generous left margin and the statement paragraph spans roughly two thirds of the viewport width. Fluid's spacing page says tokens follow the Google Material scale with a 16px unit: 0, 2, 4, 8, 12, 16, 20, 24, 32, 40, 48, 64 ... up to 128px; the measured homepage spacings (4, 6, 8, 11, 12, 13, 14, 16, 20, 24px) fall mostly on this scale. Its example rhythm is 12px between paragraphs, 24px between title and content and 48px between sections.

## Elevation & Depth

Depth on the site is mostly photographic: the hero image supplies atmosphere and the header is a translucent dark bar over it. The published token file defines elevation tokens named `shadow-2-dp` and `shadow-4-dp` (Material-style layered shadows) for raised components, but the homepage capture shows none; the floating "EVA peut vous aider" chat launcher is a white chip with a thin border over the hero. The documented button measured with the extractor has no box-shadow.

## Shapes

Shapes are rectilinear. The Fluid button and the outlined homepage button have a measured corner radius of 0px (`{rounded.none}`). Fluid's token file publishes a radius scale of 0, 4, 8, 16, 24, 32 and pill; the homepage measurement contains 16px (`{rounded.lg}`) and 32px (`{rounded.xxl}`) radii, which match the `lg` and `xxl` steps, though which elements carry them is not determined here. Borders are 1px lines in the action blue for outlined buttons.

## Components

**Primary button.** On the Fluid button documentation page, measured in the web-component Storybook: `{colors.blue-bolt}` fill, `{colors.on-primary}` label, 14px/24px Lato regular, padding 8px 32px, height 42px, radius 0px. The same page has an outlined variant with a 1px `#007bc5` border and blue label.

**Outlined call-to-action.** On the homepage, "Découvrir notre vision de la transition énergétique" is a white button with a blue 1px outline, a leading chevron icon, 12px 20px padding and 50px height.

**Navigation.** White 14px links over the dark translucent top bar; the active language "FR" is bolder than "EN". The logotype is white on photography.

**Inline links.** Hero text links such as "Découvrir le Groupe" are white, underlined, with a chevron.

**Footer.** Text in `{colors.ink-ultramarine}`.

## Design System Architecture

ENGIE publishes its system openly at [engie.design](https://engie.design) as **Fluid**. The site describes Fluid as ENGIE's design system "built for both designers and developers", with sections for Getting started (Figma, UX principles, developers), Brand (gradient ray, graphic lines, imagery, logos, pictograms), Foundations (accessibility, colors, iconography, spacing, typography), Data visualization, and about fifty components from Accordion to Tooltip. Fluid 6 is the current major version on the docs.

Tokens are published as the npm package `@engie-group/fluid-design-tokens` in CSS, JavaScript/TypeScript, JSON and Tailwind formats, and are tiered: core tokens (the raw palette, radii), semantic tokens (e.g. `--nj-semantic-color-text-brand-primary-default`) and component tokens (e.g. `--nj-avatar-border-color`). Everything uses the `--nj-` prefix, and components ship as web components plus React and Angular packages and Storybooks. The measured Storybook button comes from the web-component build. Source repository: FluidDesignSystem/fluid-design-system on GitHub (linked from the docs page). The engie.com HTML uses the matching `nj-` utility classes, which is how this DESIGN.md ties the homepage to the system.

## Do's and Don'ts

- Do use Lato Bold at large sizes for headlines and white text on photography with a dark overlay.
- Do use the Blue Bolt blue for buttons and links; Fluid says it passes the 4.5 contrast ratio.
- Do keep corners square on buttons, as measured.
- Do pair a display heading with the gradient ray beneath the first section only.
- Don't use the gradient for text, flat backgrounds, or beside text on digital pages.
- Don't use the historic logo blue as a UI color.
- Don't use Clan Pro or Right Grotesk in digital interfaces.
- Don't add rounded pills where the system uses 0px buttons.

## Responsive Behavior

The display heading drops from 72px/72px on desktop to 32px/40px at 390px width, measured on the mobile viewport. Fluid's web browser support is the last two major versions of Chrome, Firefox, Android and iOS, plus the latest Edge and Safari. Fluid's docs list display sizes with a mobile variant (the token file has names like `display-xs-mobile`), so type sizes are tokenised per breakpoint. Only the h1 size change was measured between the desktop and 390px viewports; other mobile behavior is not documented here.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add `{colors.primary}` only for actions.
2. Set headlines in `{typography.display}` and drop to `{typography.display-mobile}` below tablet.
3. Build buttons from `button-primary`: 14px Lato, 8px 32px padding, 42px tall, no radius.
4. Reserve `{colors.gradient-start}` to `{colors.gradient-end}` for one gradient rule under the first section title.
5. Pull values from the Fluid token package rather than hard-coding hex, and verify contrast against WCAG AA.
6. When the measured #007acd and the published #007bc5 conflict, prefer the published token for new work.
