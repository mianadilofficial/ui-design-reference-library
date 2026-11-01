---
version: alpha
name: Yamaha Music USA
category: "Music & Audio"
description: "Yamaha Music United States (usa.yamaha.com) measured on the live site: white canvas #ffffff with Yamaha purple #48207b for brand and links, dark #222222 footer, GTAmerica 700 uppercase 83px hero headlines, Oswald 500 category labels, Helvetica Neue 14px UI text, and a single 8px radius. Photography-led product grid."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  ink-body: "#445166"
  ink-muted: "#8492b9"
  primary: "#48207b"
  on-primary: "#ffffff"
  brand-purple-nav: "#48217a"
  accent-lilac: "#d6a4ea"
  surface-footer: "#222222"
  surface-mid: "#585858"
  surface-light: "#eeeeee"
  ink-on-dark: "#cccccc"
  hairline: "#9b9b9b"
typography:
  display:
    fontFamily: GTAmerica
    fontSize: 83px
    fontWeight: 700
    lineHeight: 83px
    textTransform: uppercase
  display-mobile:
    fontFamily: GTAmerica
    fontSize: 25.35px
    fontWeight: 700
    lineHeight: 25.35px
    textTransform: uppercase
  subheading:
    fontFamily: Oswald, "Lucida Grande", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  body:
    fontFamily: GTAmerica
    fontSize: 25.6px
    fontWeight: 100
    lineHeight: 30.72px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 8px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 9px
  s6: 10px
  s7: 11.9px
  s8: 14px
  s9: 14.77px
  s10: 15.5px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-purple-nav}"
  nav-link:
    textColor: "{colors.ink-body}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-on-dark}"
---

## Overview

This file describes the United States storefront of Yamaha's music business, measured at `https://usa.yamaha.com/` (page title "Yamaha Music - United States"). It is the instrument side of the company: pianos, keyboards, guitars, drums, brass, strings, headphones and home audio. The page is not a software product surface; it is a catalogue front door, and its personality comes almost entirely from photography rather than from interface chrome.

The composition measured on the 1280px desktop pass is a white header with the Yamaha wordmark and a purple navigation row (Products, Dealer Locator, Support, Shop, More), a rotating hero carousel with a lilac-to-yellow fluid gradient behind a team photograph and the line "Dream with a team, make waves", a full-width black feature panel for a signature guitar, and then a four-column product grid titled "Products" whose tiles are photographs with a short white label at the bottom. The scroll height of the page is 4257px.

The tone is confident and music-first. Headlines are uppercase, condensed and heavy; supporting lines are set light and in a lilac tint over dark photography. Everything that is not a photograph is restrained: white, one purple, grey text and a near-black footer.

## Colors

The canvas is `#ffffff`. The measured readable text colors, by characters set, are `#cccccc` (the most frequent, because the footer is long and dark), `#333333` for ordinary body and link text, `#ffffff` over photography, and `#445166` which is the computed body color of the page. `#333333` is used as `ink` and `#445166` is kept as `ink-body`.

Yamaha purple is the brand color. Two near-identical values were measured: `#48207b` (used as `primary`, and as the text and border color of the account button before hover) and `#48217a` (the navigation row text). They are kept as separate tokens because both are measured, even though the difference is not visible. `#8492b9` is a muted blue-grey measured on small text, and `#d6a4ea` is the lilac used for the tagline under the hero feature headline.

Surfaces by painted area are `#222222` (by far the largest, 928 of the weighted area, the footer and dark panels), `#585858`, `#eeeeee` and `#ffffff`. The single measured border color besides near-black is `#9b9b9b`. On hover, the outlined "My Account" button turns from transparent with purple text to a lighter purple fill (rgb 127, 101, 165) with white text and a white border; that fill is a measured hover state, not a separate brand color token.

No primary call-to-action button was detected by the extractor (the candidate list is empty), so `primary` here is the measured action and link purple, not a button fill. `on-primary` is white, the measured text color on the hovered account button and on the hero.

## Typography

Three families were measured by characters set: Helvetica Neue (1307 characters, the UI text, falling back to Helvetica and Arial), Oswald (513 characters, category labels and the footer headings) and GTAmerica (77 characters, headlines and taglines). The page loads Oswald at 400, GTAmerica at 400 and 700, Font Awesome 5 Free at 900 for icons, and Schibsted Grotesk at 400.

The display style is GTAmerica 700, uppercase, 83px on 83px line height on desktop; on the 390px mobile pass the same headline measured 25.35px on 25.35px. Line height equals font size, so two-line headlines sit tightly stacked. The tagline under it is GTAmerica at weight 100, 25.6px on 30.72px, in lilac `#d6a4ea`, uppercase in content. Product tile labels use Oswald 500 at 18px on 19.8px. Navigation and links are Helvetica Neue 400 at 14px; the header row itself computes to 21px.

The most-used sizes by characters are 12px (623), 14px (519), 18px (237), 24px (195) and 21px (56). Weights in use are 400, 500, 100 and 700. Proprietary GTAmerica and a licensed fallback chain are in use; where GTAmerica is not available, a condensed grotesque at weight 700 and uppercase is the closest behaviour, but this substitution is a recommendation, not something measured.

## Layout

The page is a centered column. The hero headline element measured 1140px wide, which matches the content width inside the 1280px viewport and the visible margins around the feature panel and product grid. The product grid is four columns of equal square-ish photographic tiles with narrow gutters; the tile heading element measured 296px wide and 138px tall with padding of 88.6px top, 14.77px sides and 29.55px bottom, which pushes the label to the bottom of the tile.

The spacing values measured on the page are small and irregular: 1px, 3px, 5px, 6px, 9px, 10px, 11.9px, 14px, 14.77px and 15.5px, with larger paddings of 32px and 110px on structural blocks. They are recorded as `s1` to `s10` and are not a clean scale. Vertical rhythm is created by full-bleed photographic bands rather than by whitespace.

## Elevation & Depth

No box shadows were measured anywhere on the page (the frequency list is empty). The root defines Tailwind-style `--pr-shadow` and ring variables, all transparent or zero. Depth is entirely tonal: a black feature panel against a white page, a dark overlay image on each product tile, and a dark footer. Do not add drop shadows.

## Shapes

The only measured corner radius is 8px, counted once, so the system is effectively square. The navigation, hero, feature panel, tiles and buttons that were measured all compute to 0px radius, with the account button reading 0px on hover. Photographs run edge to edge in rectangular frames. The carousel indicators are small round dots and a pause control.

## Components

- **Header and navigation.** White background, purple text (`#48217a`), items Products, Dealer Locator, Support, Shop, More, and icon buttons for account, cart and search. Links are 14px Helvetica Neue.
- **Hero carousel.** Five slide dots and a pause button, arrows at the left and right edge, a pill outlined "Learn more" button set in white over the gradient slide.
- **Feature panel.** Full-width black photograph, headline in GTAmerica 700 uppercase white, tagline in lilac.
- **Product tile.** Photograph with a dark overlay image behind a white Oswald 500 label, 18px, anchored at the bottom.
- **Footer.** Background `#222222`, text `#cccccc`, Oswald 500 at 14px for column headings listing Products, Pianos, Keyboard Instruments, Guitars and others.
- **Accessibility widget and consent bar.** A third-party accessibility launcher is visible on the right edge and a consent bar was hidden for the measurement. Neither is brand UI.

## Design System Architecture

No public Yamaha Music USA design system or brand-guidelines page was found: the `https://usa.yamaha.com/` request returned HTTP 403 to the research fetch, so no linked guideline could be opened. The de-facto system is visible in the shipped page: a Tailwind-style utility layer (root variables prefixed `--pr-` for ring and shadow, all inert), web fonts loaded as GTAmerica and Oswald, Font Awesome for icons, and a vendor icon font named launcher_icons_v2. Color is not exposed as custom properties; it is hard-coded hex.

## Do's and Don'ts

- Do use white as the base and Yamaha purple `#48207b` for brand text, links and outlined buttons.
- Do let photography carry each tile; label it with white Oswald 500 at 18px.
- Do set hero headlines in GTAmerica 700 uppercase with line height equal to font size.
- Do keep the footer at `#222222` with `#cccccc` text.
- Don't add shadows or rounded cards; measured radius is 8px once and 0px everywhere else.
- Don't present the accessibility launcher, consent bar or carousel pause control as brand components.
- Don't introduce a second accent next to lilac `#d6a4ea` on dark photography.

## Responsive Behavior

Only the mobile pass at 390px was recorded. It shows the hero headline at 25.35px GTAmerica 700 uppercase (83px on desktop), the tagline at 10.92px weight 600 (25.6px weight 100 on desktop), and the header row retaining 21px Helvetica Neue with purple text. Mobile font sizes by characters include 14px, 15px, 18px and 10.115px. The mobile header text begins "My Account | Shopping Cart | global navigation | PRODUCT", but the collapse behaviour, breakpoints and tile column counts were not measured.

## Iteration Guide

1. Start from `canvas` white and `ink` `#333333`; add `primary` `#48207b` only for links, the wordmark-adjacent nav and outlined buttons.
2. For a hero, place a dark photograph, an 83px GTAmerica 700 uppercase headline in white and a lilac `#d6a4ea` tagline.
3. For category grids, use four equal photographic tiles with an Oswald 500 18px white label.
4. Finish with a `#222222` footer in `#cccccc`.
5. Measure before adding anything: mobile layout, hover states other than the account button, and button fills are not yet recorded.
