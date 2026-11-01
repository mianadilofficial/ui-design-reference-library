---
version: alpha
name: Disney Thailand
category: "Gaming"
description: "Disney Thailand (disney.co.th), a Thai-language poster-wall storefront: neutral #f8f9fa canvas with white, #f1f2f3 and #054553 teal bands, Noto Sans Thai type at 16px/28px body and 30px section headings, and one cyan #02d6e8 pill button (24px radius, 48px tall) with black label."
colors:
  canvas: "#f8f9fa"
  page-largest: "#ffffff"
  ink: "#333333"
  primary: "#02d6e8"
  on-primary: "#000000"
  surface-teal: "#054553"
  surface-soft: "#f1f2f3"
  ink-strong: "#222222"
  ink-heading: "#000000e6"
  ink-navy: "#02172a"
  hairline: "#0000000d"
  link-blue: "#0077da"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  heading:
    fontFamily: "\"Noto Sans Thai\", NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: "\"Noto Sans Thai\", NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Thai\", NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Noto Sans Thai\", Matterhorn, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  link:
    fontFamily: "\"Noto Sans Thai\", NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 37px
    letterSpacing: 0.8px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-navy}"
    typography: "{typography.display}"
    rounded: "{rounded.lg}"
    padding: 16px 32px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.link-blue}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 393px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 0px 1px 0px

---

# Disney Thailand (disney.co.th) — Design System

## Overview
The measured page is the Thai-language storefront at disney.co.th, titled "Disney ประเทศไทย | เว็บไซต์อย่างเป็นทางการสำหรับทุกสิ่งที่เกี่ยวกับดิสนีย์". The requested address, disney.com, redirected to this regional site, so every number here describes the Thai edition and not a global Disney homepage. The page is a poster wall: a full-width hero artwork carries the title lockup inside the image itself, followed by a black promotional strip, rows of film posters, a pale grey band headed "ภาพยนตร์", and a deep teal band promoting Disney+ trailers. The interface chrome is deliberately quiet so that key art does the talking. UI is almost entirely neutral white, grey and black with one saturated accent, a cyan (`#02d6e8`) pill used for the "สตรีมเลย" (stream now) and "สมัครเลย" (subscribe) actions. Voice is short, imperative Thai with English franchise titles kept in Latin script, for example "A SHOP FOR KILLERS SEASON 2 NOW ON DISNEY+".

## Colors
The page background measured on the body is `{colors.canvas}` (#f8f9fa), a cool off-white, and the largest single area is pure white (`{colors.page-largest}`, #ffffff). Alternating bands use `{colors.surface-soft}` (#f1f2f3) for the movie carousel and `{colors.surface-teal}` (#054553) for the Disney+ trailer band, with white text on the teal. Text colors in order of reading volume are white (on dark bands), `{colors.ink}` (#333333) as the primary dark reading color, `{colors.ink-strong}` (#222222), pure black, `{colors.ink-heading}` (#000000e6, black at 90 percent) for section headings and `{colors.ink-navy}` (#02172a) for the secondary subscribe button label. The single accent is `{colors.primary}` (#02d6e8) with `{colors.on-primary}` (#000000) text on it; the same cyan is used as the 1px border of the button. `{colors.link-blue}` (#0077da) appears as the text color of the content card. `{colors.hairline}` (#0000000d) is a near-invisible 5 percent black border. A bright yellow (#ffd700) notice strip below the header was measured as a background candidate; it is an announcement banner about phishing and is not part of the brand palette.

## Typography
Two families are loaded: Noto Sans Thai (weights 400, 600 and 800) and NotoSans / Matterhorn as fallbacks, listed in the site's `--body-font-family` variable as "Noto Sans Thai, NotoSans, NotoSerif, Matterhorn, Helvetica, sans-serif". Matterhorn and InspireTWDC are Disney's own faces and were also loaded; the measured text runs in Noto Sans Thai because the page language is Thai. The extractor's largest hero text was the 16px/600 label of the hero button, recorded as `{typography.display}`; the real section heading is `{typography.heading}` at 30px/400, card titles are `{typography.subheading}` at 18px/400, running copy is `{typography.body}` at 16px with 28px line height, navigation is `{typography.nav}` at 12px, and links use 14px weight 500 with 0.8px letter spacing. Weights stay at 400 to 600; there is no display-weight drama in the UI because the logo and posters carry the personality.

### Font substitutes
Matterhorn and InspireTWDC are proprietary Disney faces. Where unavailable, Noto Sans Thai (open source) plus Helvetica or Arial is the stack the site itself falls back to, so it is the honest substitute.

## Layout
The page is full-bleed: hero artwork and bands span the entire 1280px viewport while content rows (poster grids, text) sit in a centered column about 960px wide in the body text measurement. The poster rows use a four-up grid with a 20px gap (the gap measured on the page), posters stacked above a centered caption and a small "สตรีมเลย" link. Common paddings are 4, 12, 15, 20, 30 and 80px; section bands separate with generous vertical air (80px) rather than rules. The header is a thin white bar with the Disney wordmark at the left, "DISNEY+", "ภาพยนตร์" and "พาร์คส" links, and "Sign In / Register" at the far right. A carousel arrow button (white circle) overlays the right edge of the film row.

## Elevation & Depth
Depth is nearly absent. The only shadow measured is `rgba(0, 0, 0, 0.25) 0px 0px 1px 0px`, a hairline halo used on content cards. Separation otherwise comes from alternating flat color bands (white, #f1f2f3, #054553, black strip) and from the vivid poster art. Buttons are flat fills with no shadow.

## Shapes
Radii measured: 2px (`{rounded.xs}`, cards), 4px, 5px, 24px (`{rounded.lg}`, the primary button, giving a full pill at its 48px height), 100 percent for circular carousel arrows and a pill value of 9999px. Posters themselves are square-cornered or very slightly rounded; the pill is reserved for actions.

## Components
`button-primary` is a cyan pill: background `{colors.primary}`, label `{colors.on-primary}`, 16px at weight 600, padding 16px 32px, height 48px, radius `{rounded.lg}`, and a matching 1px border. `button-secondary` ("สมัครเลย") keeps the same cyan fill and shape but switches the label to `{colors.ink-navy}`. A blue rectangular "ลงทะเบียนเลย" button on the black strip uses a different blue and is a promotional variant. Nav links are 12px; text links are 14px/500 with wide tracking. Cards are poster images with a text caption beneath and the hairline shadow noted above.

## Design System Architecture
No public Disney design system was located for this site; the pages opened for this document were the site itself at https://www.disney.co.th/ and its measured CSS. The de-facto system is expressed through CSS custom properties named by role, for example `--body-font-family`, `--header-font-family`, `--utility-font-family`, `--globalchrome-font-family` and `--globalfooter-font-family`, all resolving to the same Noto Sans Thai stack, with matching `-font-weight` and `-font-style` variables. This indicates a shared global chrome and footer component layer, but the repository or documentation behind it was not found. Color is not tokenized in rootVars; it appears as literal values in component styles.

## Do's and Don'ts
Do let artwork lead and keep chrome neutral. Do use cyan `{colors.primary}` only for the stream and subscribe actions, always as a pill with dark text. Do keep Thai body copy at 16px with the generous 28px line height. Do keep English franchise titles in Latin uppercase on poster captions. Don't add decorative gradients or shadows to controls. Don't use the yellow notice color or the promotional blue as brand accents. Don't tighten Thai line heights; stacked tone marks need the room. Don't place cyan text on white; the accent is a fill, not a text color.

## Responsive Behavior
Only desktop (1280px) and a mobile pass were measured. The grid of four posters per row is a desktop arrangement; carousel arrows indicate that rows scroll horizontally when space runs out. The hero art is a wide image that crops at narrower widths. Breakpoint values were not recorded in the measured data, so none are stated here.

## Iteration Guide
Start from the canvas `{colors.canvas}` and a white header. Place one cyan pill per hero. Build rows of posters at equal width with 20px gaps and a centered 16px caption. Alternate bands between white, `{colors.surface-soft}` and `{colors.surface-teal}` to pace the page, using white text on the teal. Keep heading size at 30px/400 and body at 16px/28px. When adding a control, copy `button-primary` exactly (48px tall, 24px radius, 16px/32px padding). Verify any new color against the measured palette before use, and prefer imagery over ornament.

### Measurement notes
The extraction treated the hero button label as the largest hero text because the actual hero headline is part of a bitmap poster and not live text; that is why the display token is 16px at weight 600 rather than a large headline size. The mobile pass was captured separately and shares the same font stack. The cyan button text is black on cyan, which reads clearly; the secondary button swaps to the dark navy label without changing the fill, so the pair reads as one family of actions rather than two competing styles. Posters, trailers and title lockups are the only places where saturated hue other than cyan appears, and designers extending this system should treat those as content, never as interface color.
