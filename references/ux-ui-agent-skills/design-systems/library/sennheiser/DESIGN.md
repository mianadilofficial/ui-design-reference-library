---
version: alpha
name: Sennheiser
category: "Music & Audio"
description: "Sennheiser storefront home page: sennheiserFont 400/500 type, black #000000 pill buttons at 54px, ink #303030 on white #ffffff, grey #f4f4f6 product tiles, blue #037cc2 active category row, teal #003746 footer, 8px card radius."
colors:
  canvas: "#ffffff"
  ink: "#303030"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#333333"
  ink-4: "#545252"
  ink-5: "#ffffffb8"
  ink-6: "#999999"
  hairline: "#ececf0"
  footer-bg: "#003746"
  accent-blue: "#037cc2"
typography:
  display:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 50px
    fontWeight: 500
    lineHeight: 55px
  display-mobile:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  heading:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 35.2px
  subheading:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 14.3px
  body:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15.6px
  nav:
    fontFamily: sennheiserFont, "sennheiserFont Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 35px
rounded:
  xs: 4px
  sm: 8px
  md: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 14.3px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
    padding: 20px 18px 18px
    height: 54px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
    padding: 20px 18px 18px
    height: 54px
  link:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 14px 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.22) 0px 5px 26px 0px, rgba(0, 0, 0, 0.3) 0px 20px 28px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-6}"
---

# Sennheiser

## Overview
The measured page is Sennheiser's German-region English storefront home (sennheiser.com/en-de; title "Sennheiser — Headphones, Microphones, Wireless Systems"). The first capture caught a location/language modal; the page was re-measured with the extraction batch and now measures 1280px wide by 4976px tall. A privacy dialog still appears in the capture, and consent controls are excluded from the design tokens described here. A slim white header holds the slashed-S logo, the menu (Products, Applications, Stories, Learn, Support, About us), a "Consumer" switch and icon buttons. The hero is a two-up slide ("Spectera SKM, Now shipping") with a black pill "Learn more" button and a 2/5 slide counter with circular arrows. "Shop now" (50px, with a small superscript count) introduces four product tiles on pale grey (#f4f4f6 area) with HD 490 PRO, HD 480 PRO, e 835 and HD 25. Next, two category lists beside photos: a blue (#037cc2) highlighted first row (Microphones; Live Production & Touring) followed by plain rows (Headphones, Meeting and conference systems, Wireless systems; Filmmaking, Live theatre, Studio recording) with black pill buttons ("View all products", "View all applications"). Three dark image cards (Mobility, AMBEO Spatial Audio, Dear Reality), two story cards (About us, Working at Sennheiser), a "Latest news" grid and a deep teal-blue footer (#003746) complete the page. Imagery is dark, moody concert, studio and automotive photography with product cutouts on light grey.

Voice and art direction: copy is short and product-led ("Shop now", "Now shipping", "Immersive audio for all", "Enhance your ride", "Create immersive audio experiences"). Photographs use deep blue and amber concert lighting, close crops of microphones and a guitarist on stage, car interiors, and workplace scenes in low light, while product tiles use clean studio cutouts on a pale grey field. The result alternates between a light retail zone (white and grey, pill buttons) and a dark editorial zone (full-bleed image cards with small white captions). Density is moderate: generous whitespace between sections, but each section carries a lot of imagery.

## Colors
- Canvas: #ffffff; surface greys #f4f4f6 and #ececf0 (hairline and link backgrounds); dark #333333 and black #000000 areas for image cards and overlays.
- Primary: #000000 (pill buttons). On-primary: #ffffff.
- Ink: #303030 (most-read text, 1084 characters), #000000 headings, #545252 secondary, #999999 on dark footer, #ffffffb8 translucent white text on dark.
- Accent blue: #037cc2, the active category row background. The site root declares `--ss-primary-color: var(--sennheiser-blue)`, but the underlying value was not exposed.
- Footer: #003746, a very dark teal.
Root also lists semantic values: `--ss-error-color: #dc3545`, `--ss-success-color: #00b755`, `--ss-border-color: #dcdee2`, `--ss-highlight-color: #fffb8c`, `--ss-font-color: #4d4d4d`.

## Typography
One custom family, sennheiserFont (400 and 500), with a generated fallback; system-ui appears on 1106 characters, which are the consent dialog text and not brand type.
- Display: 50px / 55px, weight 500 ("Shop now"); mobile pass: 20px / 24px, 500.
- Heading: 32px / 35.2px, 500 (hero headline "Spectera SKM / Now shipping" and the "Latest news" block).
- Subheading and button: 13px / 14.3px, 500.
- Body: 13px / 15.6px, 400. Navigation: 20px / 35px, 400 (category list rows).
Frequent sizes: 17.5px (1076), 20px (701), 13px (586), 32px (234), 11px (39), 16px (23), 50px (19). Headings are sentence case with no tracking changes recorded.

## Layout
A 94px-high header (`--header-height: 94px`) sits above full-width hero slides. The body uses a four-up product row, then a two-column pattern (list left, image right) repeated for Microphones and Live Production, then a three-up row of dark image cards and a two-up row of story cards. Latest news uses one large item plus two small ones. The footer holds four link columns and a newsletter sign-up. Root spacing includes `--ss-spacing-l: 7px`; measured spacing values are 0.13px, 1px, 4px, 5px, 6px, 7px, 8px, 10px, 12px and 14px.

## Elevation & Depth
One shadow was measured: `rgba(0,0,0,0.22) 0 5px 26px 0, rgba(0,0,0,0.3) 0 20px 28px 0`, on a floating card (the dialog layer). Page content itself is flat, with pale grey tiles and photography doing the separation. A 20% black overlay (#00000033) covers hero images behind slide text.

## Shapes
The shape vocabulary has three tiers. Pills (1000px, the most frequent radius) are used for actions, 8px for cards and floating panels, and 4px for small elements. Photography and product tiles are not rounded. Following this ladder keeps buttons recognizable as the only strongly rounded element on the page.
Radii: 1000px (17, pills), 50px (6), 4px (4), 8px (1) and an `8px 8px 0 0` top-rounded one. Buttons are fully rounded pills; cards use 8px; the root declares `--ss-border-radius: 0` for its form-style components. Product tiles and photo panels are square-cornered.

## Components
All measured controls are either pill buttons or list rows; there are no outlined buttons in the extraction.
- **Button (primary and secondary)**: black fill, white 13px 500 text, pill radius (1000px measured), 54px high, padding 20px 18px 18px. Examples: "Learn more", "View all applications".
- **Category row**: 20px text, 14px 20px padding; the active row has a #037cc2 fill with white text and an arrow icon.
- **Link**: #ececf0 background, black 13px 500 text.
- **Card**: white, 8px radius, large two-layer shadow when floating.
- **Product tile**: light grey (#f4f4f6) with a centered product cutout and a 13px model label.
- **Footer**: #003746 with #999999 links.
Consent and region-selection dialogs are not brand components and are excluded.

## Design System Architecture
The site exposes a prefixed variable set (`--ss-*`: primary color, border color, border radius, error, success, disabled, highlight, placeholder, font color, spacing, main height) and semantic page variables (`--body-bg-color`, `--body-text-color`, `--header-height`, `--grey-on-dark: #999`, `--hover-black: #262626`, `--subtext-black-text: #0009`). Colors refer to named base values such as `--sennheiser-blue` and `--pure-white`. No public design-system or brand-guideline link was found when the home page was scanned.

## Do's and Don'ts
These rules come from measured values and the capture, and they do not extend to behaviors that were not recorded.
- Do use black pill buttons and white or pale-grey canvas, with photography carrying drama.
- Do reserve #037cc2 for the active category row.
- Do set all text in sennheiserFont at 400 or 500.
- Don't use system-ui or consent-dialog styling in product UI.
- Don't give cards radii beyond 8px or buttons anything but a pill.
- Don't add colors outside the measured set.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured; no tablet widths were recorded, and the mobile pass produced only role data (headings and sizes), not layout.
Mobile pass at 390px: the first measured heading, "Spectera SKM", is 20px with 24px line height at weight 500 and color #545252. Menu collapse, grid stacking and carousel behavior were not measured.

## Iteration Guide
For new sections, choose between the two zones used on the page: the retail zone (white canvas, grey #f4f4f6 tiles, black pill action) and the editorial zone (full-bleed dark image card, white text). Do not mix them within one block. Keep body text at 13px or 20px list size, headings at 32px or 50px, and make sure button height stays at 54px so rows of actions align.
1. Tokens: canvas #ffffff, ink #303030, primary #000000, surface #f4f4f6, footer #003746.
2. Type: sennheiserFont 500 for headings (50, 32, 13), 400 for body.
3. Build pill buttons at 54px; category lists with one blue active row.
4. Add dark photographic cards with white captions.
5. Run `node web/scripts/verify-designs.mjs --slug=sennheiser`.
Not measured: hover (only one consent-button sample), dark mode, motion.
