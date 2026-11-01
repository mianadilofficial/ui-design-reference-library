---
version: alpha
name: "Goldman Sachs"
category: "Banking & Insurance"
description: "Goldman Sachs home page measured from the live site: editorial, square-cornered corporate design in GS Sans, GS Sans Condensed and GS Serif, near-black #000000cc ink on #ffffff, a black #000000 primary button with 0px radius, and a single steel-blue #7297c5 navigation bar."
colors:
  canvas: "#ffffff"
  ink: "#000000cc"
  primary: "#000000"
  on-primary: "#fffffff2"
  surface-subtle: "#f7f7fa"
  ink-strong: "#000000f2"
  ink-muted: "#00000099"
  ink-soft: "#000000b3"
  on-dark-muted: "#ffffff99"
  nav-bg: "#7297c5"
  footer-text: "#ffffffb3"
typography:
  display:
    fontFamily: "\"GS Sans Condensed\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"GS Sans Condensed\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  heading:
    fontFamily: "\"GS Serif\", Times, \"Times New Roman\", serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 80px
  subheading:
    fontFamily: "\"GS Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: "\"GS Sans\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"GS Sans\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22px
  button-secondary:
    fontFamily: "\"GS Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 15px
    height: 48px
  button-secondary:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 9px 11px
    height: 40px
    borderColor: "{colors.ink-strong}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 12px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.footer-text}"
    rounded: "{rounded.none}"
    padding: 64px 0px 32px
---

# Goldman Sachs

## Overview

The Goldman Sachs home page at goldmansachs.com reads as an editorial financial publication rather than a product site. A full-bleed photographic hero opens the page, a one-line press-release banner follows, and then the page alternates between white and a faint cool-grey surface (`surface-subtle`, #f7f7fa) as it works through "The Firm in Action" and "Delivering for Our Clients". There is no illustration system and no gradients in the measured CSS. Authority comes from three owned typefaces, a near-black ink on white, and a strictly square geometry: the extraction recorded no border radius anywhere, so every rendered element computes to 0px.

The voice is institutional and factual. Section kickers are small uppercase labels ("STAY INFORMED", "WHAT WE DO", "NEWS AND MEDIA", "AWARDS AND RECOGNITION"), headlines are full sentences about people and markets ("Four Goldman Sachs Leaders Named Most Powerful Women in Banking"), and calls to action are plain verbs with a trailing arrow ("View Press Release", "Watch Now", "Read More"). Photography is documentary: television-interview stills, group portraits of staff, an aerial shot of container ships under the hero headline "The Outlook for Global Inflation".

The capture was taken while the hero headline and its button were still fading in, so the hero text appears dim in the screenshot. The measured hero styles (serif headline, white text) are valid; the low contrast in the image is an animation state and not a brand choice.

## Colors

The palette is almost entirely neutral, with a single steel-blue used for the top navigation bar and the date tile of the press banner.

- `canvas` #ffffff is the page background and covers the largest measured background area.
- `ink` #000000cc is the body text color, black at roughly eighty percent alpha, and is the most-read text color by character count. `ink-strong` (#000000f2) is used for headlines and for the secondary button label and border. `ink-soft` (#000000b3) colors the small uppercase kickers and `ink-muted` (#00000099) colors captions and metadata.
- `primary` #000000 is the fill of the primary button ("Subscribe Now") and of the footer. `on-primary` #fffffff2 is the near-white used on it.
- `surface-subtle` #f7f7fa alternates with white for section banding.
- `nav-bg` #7297c5 is the muted blue of the global navigation bar and the date block; it is the only chromatic color measured. Nav link text sits on it in `ink`.
- `footer-text` #ffffffb3 and `on-dark-muted` #ffffff99 are the translucent whites used on the black footer and on photographic overlays.

Do not introduce a brighter blue or any accent color; the measured system has none. Contrast is handled by alpha-black text on white rather than by a separate grey scale.

## Typography

Three families are loaded by the site: GS Sans (with a variable build, GSSansVF), GS Sans Condensed and GS Serif.

- `display` is GS Sans Condensed at 40px weight 400 with a 40px line height (32px on mobile as `display-mobile`). This is the h1 style used for press-release and news headlines; it sets tight, tall headlines.
- `heading` is GS Serif at 80px weight 300 with an 80px line height, used for the hero headline over photography.
- `subheading` is GS Sans at 16px, weight 400, 20px line height, letter-spacing 1px and uppercase. It is the kicker style and also the navigation link style.
- `body` is GS Sans at 18px, weight 400, line height 28px.
- `button` is GS Sans 18px weight 500 (line height 22px); `button-secondary` is 16px weight 500 (line height 20px).

By character count GS Sans carries most of the text, the condensed face carries headlines and the serif appears only in the large hero statement. Weights in use are 300, 400, 500 and 700. Letter-spacing is only applied to the uppercase labels, at 1px.

GS Sans, GS Sans Condensed and GS Serif are proprietary, loaded as web fonts. For a substitute keep the roles: a humanist grotesque for body, a condensed grotesque for headlines, and a light high-contrast serif for hero statements.

## Layout

The measured page scroll height is 7474px at a 1280px viewport. Content runs on a three-column card grid for news ("The Firm in Action") and a wider multi-card row for "Delivering for Our Clients". Section headers sit left-aligned above the grid with the kicker above the headline. The spacing scale found in the CSS is 4, 5, 8, 9, 10, 11, 12, 15, 16 and 24px (`s1` to `s10`); the most common padding value is 16px and the most common gap is 32px. Footer padding is 64px 0 32px.

The navigation is a single bar: wordmark left, four primary links (What We Do, Insights, Our Firm, Careers), then a second group (Investor Relations, Pressroom, Worldwide, Alumni), a search icon and an outlined "Client Login" button. The header link padding is 0px 12px.

## Elevation & Depth

No box shadows and no border radius were measured. Depth is created only by photography, by the alternation between `canvas` and `surface-subtle`, and by the dark footer. The only border color recorded is `ink-strong` (#000000f2) on the outlined secondary button. On hover a white link-style button changes its fill to a light grey (from rgb(255,255,255) to rgb(245,245,245)); the extraction recorded no other hover change.

## Shapes

Everything is square. `rounded` has a single value, `none: 0px`, and it applies to buttons, navigation, cards and the footer. Images are rectangular and are cropped to equal heights in the card rows. The only non-rectangular elements in the capture are the oversized "GS" monogram cropped at the right edge of the hero and the small arrow and external-link glyphs on text links.

## Components

- **button-primary**: fill `primary` (#000000), text `on-primary`, 18px/500 label, padding 12px 15px, height 48px, radius 0px. Measured on the "Subscribe Now" link.
- **button-secondary**: transparent, text and 1px border in `ink-strong`, 16px/500 label, padding 9px 11px, height 40px, radius 0px.
- **nav**: fill `nav-bg` (#7297c5), link text in `ink`, links in the uppercase-free `subheading` style with 0px 12px padding.
- **footer**: fill `primary`, text `footer-text`, padding 64px 0px 32px.
- **Text links with arrows** ("Watch Now", "Read More", "View Press Release") are bold GS Sans labels with a trailing arrow glyph; an external-link glyph marks links that leave the site.
- **News card**: image, uppercase kicker, condensed headline, short body, then the arrow link; cards have no border, fill or shadow.

## Design System Architecture

No public design-system or brand-guidelines page was opened for this entry. The only fetch of the home page by the research tool returned HTTP 403, so nothing beyond the live-site measurement is cited. The de-facto system visible in the shipped CSS is small: three font families, a seven-step text-size scale used by character count (18, 16, 20, 40, 30, 12, 14, 60, 100, 80px appear), a neutral color set of alpha-black and alpha-white values, and one chromatic color. No CSS custom properties are declared on the root element (rootVars is empty), so the site is styled with compiled component classes rather than a token layer.

## Do's and Don'ts

Do:
- Keep corners square at 0px and let photography supply the color.
- Use uppercase 16px kickers with 1px letter-spacing above every headline.
- Pair the condensed face for headlines with GS Sans for body and reserve the serif for one large statement per page.
- Use alpha-black text (`ink`, `ink-strong`) rather than a separate grey ramp.

Don't:
- Add rounded buttons, shadows or gradients; none are measured.
- Use `nav-bg` as a general accent; it appears only on the navigation bar and the date tile.
- Reproduce the dimmed hero text seen in the capture; that is a fade-in frame.

## Responsive Behavior

Measured at the mobile viewport: the h1 drops from 40px to 32px (line height 32px, the `display-mobile` token) and the hero serif headline drops from 80px to 36px with a 36px line height; body copy drops from 18px/28px to 16px/24px. No other mobile layout data (column counts, navigation collapse, breakpoints) was recorded, so those behaviors are not measured.

## Iteration Guide

1. Start from `canvas` and `ink`; add `surface-subtle` bands only to separate sections.
2. Set headlines in `display`; add a `subheading` kicker above each.
3. Build buttons from `button-primary` (black) and `button-secondary` (outlined) with radius 0px.
4. Use `nav-bg` only for the top bar and date tile.
5. Before shipping, check that no element has a radius, shadow or gradient, and that text colors come only from the alpha-black and alpha-white values listed above.
