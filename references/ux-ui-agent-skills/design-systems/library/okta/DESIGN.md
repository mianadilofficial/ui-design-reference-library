---
version: alpha
name: Okta
category: "Tech & AI"
description: "Okta's marketing site: SeasonMix serif headlines at 56px/63.84px weight 400 over a warm off-white #fbfbfa canvas, Aeonik sans for UI and body at 16px/22.4px, an electric blue #0131ff Contact us button with a 30px radius, deep navy #00033e glass cards on blue gradient panels, and a charcoal #1e1e1e footer."
colors:
  canvas: "#fbfbfa"
  page-largest: "#1e1e1e"
  ink: "#383838"
  primary: "#0131ff"
  on-primary: "#fbfbfa"
  primary-hover: "#3f59e4"
  primary-active: "#1a31a9"
  primary-light: "#b6caff"
  error: "#da372c"
  surface-topbar: "#040813"
  ink-on-dark: "#ffffff"
  ink-strong: "#191919"
  ink-card: "#e5e5e5"
  nav-bg: "#00000029"
  card-navy-glass: "#00033e99"
  footer-text: "#ababab"
typography:
  display:
    fontFamily: SeasonMix, serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 63.84px
  display-mobile:
    fontFamily: SeasonMix, serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  heading:
    fontFamily: SeasonMix, serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 55.68px
  body:
    fontFamily: Aeonik, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.2px
  button:
    fontFamily: Aeonik, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: 0.2px
  nav:
    fontFamily: Aeonik, "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.18px
  button-large:
    fontFamily: Aeonik, "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 0.16px
rounded:
  xs: 6px
  sm: 8px
  md: 15px
  lg: 16px
  xl: 24px
  2xl: 30px
  3xl: 32px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 10.08px
  s7: 12px
  s8: 14.5px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 18px 16px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
  nav-menu-trigger:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 32px
  nav-menu-trigger-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-large}"
    rounded: "{rounded.sm}"
    padding: 16px 48px
  button-light-hover:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-on-dark}"
    padding: 0px 0px 64px
  nav-link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-navy-glass}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.lg}"
    padding: 32px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.footer-text}"
    padding: 24px 64px
---

# Okta

## Overview

okta.com ("Secure Identity for Employees, Customers, and AI | Okta") pairs an editorial serif with a clean grotesque
and a single electric blue. The page is 6,231px tall at desktop. A near-black #040813 strip at the top carries an event
line ("October 20 | Beyond Oktane: Unify identity governance & privileged access — Register now"), a phone number,
Search, a region picker ("United States (EN)") and Login. The main header floats transparently over the hero: the Okta
logo, Products, Solutions, Learning & Support, Developers, Company, a text **Free trial** link and a blue pill
**Contact us** button.

The hero is a full-bleed event photograph — a crowd facing a stage screen reading "oktane" with a glowing 3D app tile
— under an "OKTANE ON DEMAND" eyebrow, the serif headline "Welcome to the secure agentic future", a short line about
the livestream, and two buttons: a light "Watch now" and an outlined "Read the highlights". Tabs at the bottom of the
hero read "OKTANE 2026 / OKTA SECURES AI / PRODUCT INNOVATION".

Below on the off-white canvas: a deep-blue gridded "Blueprint Alliance" card ("No one can secure the agentic future
alone"); a large blue-to-coral gradient panel ("Transform your identity across your business") holding three navy
glass cards (Agentic identity, Workforce identity, Customer identity); a logo row (McLaren, Wyndham, Hitachi,
Booking.com, Mars, FedEx); a McLaren Racing story card with a "100%" stat; analyst proof (Gartner, Forrester); a tabbed
article row ("Go inside the minds of the leaders in identity"); a "Ready to secure your next big move?" trio of
options; and a charcoal footer. Copy is measured and enterprise-calm; headlines are sentence case.

## Colors

- **Canvas** — `canvas` #fbfbfa, a warm off-white, is the body background. A second light band measures #f7f7f6.
- **Charcoal** — `page-largest` #1e1e1e is the largest painted area (footer and dark media sections).
- **Primary blue** — `primary` #0131ff fills Contact us and the hover state of every main nav item. The site's theme
  variables define the button hover `#3f59e4` (`--theme-ui-colors-buttonPrimaryBackgroundColorHover`, also measured as a
  background), the active state `#1a31a9`, and a light blue `#b6caff` (`primaryLight`).
- **Navy glass** — `card-navy-glass` #00033e99 (navy at 60% alpha) for the product cards on the gradient panel; at
  mobile the same band paints solid #00033e.
- **Ink** — `ink` #383838 is the dark text on the canvas (`--theme-ui-colors-darkTextColor`); `ink-strong` #191919 for
  headings and links; `ink-on-dark` #ffffff and #fbfbfa on dark/media areas; `ink-card` #e5e5e5 inside navy cards.
- **Footer text** — `footer-text` #ababab on #1e1e1e.
- **Top bar** — `surface-topbar` #040813.
- **Error** — `error` #da372c (`--theme-ui-colors-inputError`).
- The theme also defines secondary teal #4cb7a3 and tertiary violet #4016a0 / #7549f2; none of these reached the
  measured visible text or large backgrounds on the home page, so they are not tokens here.

## Typography

Fonts are self-hosted from `/etc.clientlibs/okta-www/clientlibs/clientlib-site/resources/fonts/`:

- **SeasonMix** (Regular 400) — every headline. Display **56px / 63.84px**; section headings **48px / 55.68px**
  (another measures 48px/56px); headings on the page also measure 40px, 32px and 24px. Only weight 400 is loaded — hierarchy is size
  only. Tracking is normal.
- **Aeonik** (400, 500) — all UI and body. Body **16px / 22.4px, +0.2px**; buttons **16px / 22.4px, 500, +0.2px**;
  top-bar and eyebrow text **12px / 20px, 500, +0.18px**; large light buttons **20px / 32px, 500, +0.16px**. The most
  frequent size on the page is 20px.

Aeonik carries 2,057 measured characters and SeasonMix 603. If the served files are not available to you, use a
contemporary serif with a calm regular weight for display and a geometric grotesque for UI.

## Layout

At 1280px: top bar 0/40, media hero 40/830, canvas band 870/2242 (two-column sections: heading left, text right),
media story band 3112/446, light band 3558/1660 (up to four columns: analyst proof and article tabs), media options band
5218/398, footer 5616/615 (two columns). The header measures 184px including its 64px bottom padding
(`--header-total-height: 184px`) and shows 7 links. Content containers are capped by `--hero-container-max-width:
82rem`. Up to 5 card columns were counted (logo row). The spacing scale runs 1, 4, 5, 6, 10, 10.08, 12, 14.5, 15 and
16px; cards use 32px padding and the footer 24px 64px.

## Elevation & Depth

Three shadows were measured: `rgba(0, 0, 0, 0.3) 0px 10px 30px 0px` (three elements), `rgba(0, 0, 0, 0.08)
0px 24px 40px 0px` (soft card lift), and `rgba(25, 25, 25, 0.1) 0px 1px 24px 0px`. The navy cards gain depth from
translucency (#00033e99) over a saturated gradient, and the hero from photography. The header is a 16% black overlay
(#00000029) over the image.

## Shapes

Radii are generous. The primary button uses **30px** (pill-like at 56px tall); nav triggers **15px** at 32px tall.
Light buttons use **8px** (the most frequent radius); cards **16px**; large panels **24px**, **32px** and **40px**.
**6px** appears once; avatars and round controls use 50%. A 9999px pill value is also in the scale. Rectangular,
sharp corners are rare.

## Components

- **Contact us (primary)** — #0131ff, #fbfbfa Aeonik 16px/500 text, 30px radius, 56px tall, 18px 16px padding. Theme
  hover #3f59e4, active #1a31a9.
- **Nav menu trigger** — Products / Solutions / … as 32px-tall buttons with a 15px radius, 4px 12px padding, white
  text; on hover they fill #0131ff with #fbfbfa text.
- **Free trial** — text link that fills #fbfbfa with #1e1e1e text on hover.
- **Light button** — "Watch now" / "Discover the framework": #fbfbfa fill, #1e1e1e Aeonik 20px/500 text, 8px radius,
  16px 48px padding, 64px tall; hover inverts to #1e1e1e fill and #fbfbfa text.
- **Navy glass card** — #00033e99, 16px radius, 32px padding, #e5e5e5 text, serif title, arrow at the bottom.
- **Story card** — dark overlay panel on a photo with a large serif stat ("100%") and a "See full story" link, on a media band.
- **Article tabs** — text tabs with an underline on the active tab, cards with a small uppercase eyebrow ("BLUEPRINT
  ALLIANCE", "AGENT SSO") above a serif title.
- **Footer** — #1e1e1e with #ababab text, link columns ("Starting with Okta", "Help & Support") and an outlined
  "Contact us" button.

## Design System Architecture

Okta's product design system is Odyssey, published at https://github.com/okta/odyssey ("Build and design consistent,
efficient, and accessible UIs for all Okta users"). The repository page does not state that it drives the marketing
site, and no tokens are taken from it here. The newsroom (https://www.okta.com/press-room/) offers logo, leadership-photo
and product-image downloads but no color or typeface guidance.

The marketing site's own system is visible in `:root` as Theme UI variables (`--theme-ui-colors-*`): button roles
(`buttonPrimaryBackgroundColor`, `buttonPrimaryBackgroundColorHover: #3f59e4`, `buttonPrimaryBackgroundColorActive:
#1a31a9`), text roles (`darkTextColor: #383838`, `linkPrimaryColor: #191919`), section backgrounds
(`sectionPrimaryBackgroundColor: #191919`, `sectionSecondaryBackgroundColor: #fffefa`), a neutral ramp
(`neutral100: #fbfbfa`, `gray400: #ababab`, `gray900: #1e1e1e`) and content-type colors (`colorDemo`, `colorVideo`,
`colorAnalystResearch`, `colorDatasheet`). Layout variables include `--header-total-height` and
`--hero-container-max-width`. Fonts and styles ship from `/etc.clientlibs/okta-www/clientlibs/clientlib-site`.

## Do's and Don'ts

**Do**
- Set headlines in SeasonMix 400 and let size carry hierarchy; keep UI and body in Aeonik.
- Reserve #0131ff for the primary action and nav hover; use #3f59e4 / #1a31a9 for hover and active.
- Put cards on saturated blue gradient panels as translucent navy glass with 16px radii.
- Use full-bleed event and product photography in the hero with a light and an outlined button.
- Keep the canvas warm off-white (#fbfbfa), not pure white.

**Don't**
- Don't bold the serif; only weight 400 is loaded.
- Don't use the theme's teal or violet as page accents; they were not measured on the home page.
- Don't square off buttons; the measured buttons use 8px, 15px and 30px radii.
- Don't place dark #383838 text on the navy panels; card text there is #e5e5e5.

## Responsive Behavior

Measured at 390px:

- Display **32px / 38.4px** (desktop 56px); section heading **32px / 44.16px**; body **16px / 24px**.
- The header measures 136px with 32px bottom padding; 2 header links are visible and a menu toggle labelled
  "Open menu" is shown.
- Band order: top bar 0/40, hero 40/686 (2 columns recorded), canvas 726/670, a solid #00033e band 1396/2147 for the
  product cards, logo band on #fbfbfa 3543/433, story 3976/247, #fafaf9 articles 4223/2312 (2 columns), options
  6535/202, footer 6737/1570.
- The "Start a free trial" option measures 358px wide, 60px tall, with a #fffefa80 fill and #191919 20px text.
- Content insets are 16px on most bands.

Menu panel contents were not measured.

## Iteration Guide

1. Lay a #fbfbfa canvas; set the hero headline in SeasonMix 400 at 56px/63.84px over full-bleed photography.
2. Build the header: #040813 top bar with 12px/500 Aeonik, transparent main nav with 32px-tall 15px-radius triggers
   that fill #0131ff on hover, and a #0131ff 56px Contact us pill (30px radius).
3. Use light 8px-radius buttons (20px/500, 16px 48px padding) on dark imagery; invert them on hover.
4. Present products as #00033e99 glass cards (16px radius, 32px padding) on a blue gradient panel.
5. Add analyst proof and article tabs on the light band; finish with a #1e1e1e footer and #ababab text.
6. On mobile, scale display and section headings to 32px and body to 16px/24px.
