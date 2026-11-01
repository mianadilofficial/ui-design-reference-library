---
version: alpha
name: Wookco
category: "Thai Brands"
description: "Wookco (sustainable travel booking) design system: Plus Jakarta Sans 48px headings with Inter body, white canvas, emerald #286648 primary, navy #1a263f ink and pills, coral #f5835b promos and 22px cards with a navy-tinted soft shadow."
colors:
  canvas: "#ffffff"
  page-body: "#f8fafc"
  ink: "#1a263f"
  primary: "#286648"
  on-primary: "#fcfcfc"
  on-ink: "#f6f9fc"
  accent-coral: "#f5835b"
  tint-mint: "#d8f3e3"
  tint-coral: "#ffe7dd"
  surface-navy-deep: "#0d152a"
  ink-muted: "#596475"
  ink-on-dark-muted: "#ffffff99"
  hairline: "#dfe5ed"
  nav-bg: "#ffffffe6"
  footer-border: "#ffffff1a"
typography:
  display:
    fontFamily: "\"Plus Jakarta Sans\", Inter, ui-sans-serif, system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Plus Jakarta Sans\", Inter, ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: "\"Plus Jakarta Sans\", Inter, ui-sans-serif, system-ui, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.75px"
  body:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  button-secondary:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 12px
  sm: 14px
  md: 18px
  lg: 22px
  xl: 26px
  2xl: 29.6px
  3xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 36px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 20px
    boxShadow: oklch(0.27 0.05 265 / 0.05) 0px 1px 2px 0px, oklch(0.27 0.05 265 / 0.18) 0px 8px 24px -12px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: oklch(0.27 0.05 265 / 0.05) 0px 1px 2px 0px, oklch(0.27 0.05 265 / 0.18) 0px 8px 24px -12px
  footer:
    backgroundColor: "{colors.surface-navy-deep}"
    textColor: "{colors.ink-on-dark-muted}"
    padding: 48px 0px 32px
    borderColor: "{colors.footer-border}"
---

# Wookco

## Overview
Wookco is a sustainable-travel booking platform; the page title is "Wookco — Travel More. Emit Less. | Global Sustainable Travel" and the hero reads "Travel More. Emit Less." over a photograph of limestone islands and turquoise water, with a green "Verified Eco-Impact on Every Booking" chip above it. A white search card sits on the hero with three tabs (Tours & Experiences, Eco-Stays, Airport Transfers), a field "Search tours, eco-stays, or airport transfers..." and a green "Search" button. Below the hero are four service tiles (Eco-Stays, Tours & Experiences, Airport Transfers, Impact Hub), a coral promotional banner ("฿300 off your first low-carbon tour", code GREENSTART, a "Claim offer" pill), a destination mosaic under "Where to Next?" with filter chips (All, Tokyo, Reykjavik, Bali, Bangkok, Paris, Kyoto, Zurich), a "Low-carbon favourites" row of cards that show per-tour CO2e savings and trees planted, and a "WHY WOOKCO" section ("Travel with more confidence—and more purpose") with four benefit cards. The header carries the wordmark, Home, Wooki AI, Impact Hub, My Bookings, Profile, an "Early Access Preview" tag, "List Your Services", EN and THB switches and a navy "Sign In / Sign Up" pill. The voice is confident, factual and eco-positive; every offer quantifies impact.

## Colors
The site's own root variables define the palette as navy, emerald and coral. Its `--primary` resolves to `--emerald` (`oklch(46% .08 160)`), which matches the measured green `#286648` used for the Search button, impact chips and green text (173 characters). Navy `#1a263f` (`--navy`) is the ink color and the fill of the header sign-in and tab pills; its foreground is `#f6f9fc`. Coral `#f5835b` (`--coral`, 70 characters of text, with the promo banner built from `--gradient-promo` coral to a slightly redder coral) is the secondary accent; soft tints `#d8f3e3` (mint, `--emerald-soft`) and `#ffe7dd` (coral, `--coral-soft`) fill chips and icon badges. The canvas is white `#ffffff` with `#f8fafc` as the page body; footer is deep navy `#0d152a`, with `#ffffff99` for muted text on dark. Muted text on light is `#596475` and hairlines are `#dfe5ed`; the translucent header is `#ffffffe6`. The hero overlay is a vertical navy gradient (`--gradient-hero`) rather than a flat scrim.

## Typography
Headings use Plus Jakarta Sans (weights 600 and 700 loaded) and everything else uses Inter (400 to 700); Inter covers 2,129 measured characters and Plus Jakarta Sans 585. The hero heading is 48px, weight 700, line-height 60px, letter-spacing -1.2px; section headings ("Where to Next?") are 30px weight 700 with 36px line-height and -0.75px tracking; a 36px step with -0.9px tracking also appears. Body is Inter 16px weight 400 with 26px line-height; links 16px weight 600; small buttons 12px weight 500; larger buttons 14px weight 600; inputs 14px. Uppercase 12px labels use 0.6px tracking ("WHY WOOKCO"). Most characters are 12px (815), 14px (582) or 16px (517), so the interface text is small and the headings large. Both families are open Google fonts, so no substitutes are needed.

## Layout
The desktop capture is 1,280px wide and 3,794px tall. A translucent white header sits over the hero (its background is `#ffffffe6`). The hero search card is left-aligned and narrower than the full width, followed by a four-up tile row, a full-width promo banner, a mosaic of one large and four small destination images, a four-card row of tours and stays, and a four-up benefit row. Measured gaps are 4px, 8px, 6px and 12px; paddings are 12px (42 uses), 8px, 16px, 20px, 24px, 48px and 64px. Cards run four across with consistent gutters.

Each product card in the capture follows one structure: a top image with a small white label pill (Tour or Eco-Stay), a location line with a pin, a star rating at the right, a two-line title, mint chips for the carbon figure (for example "-14.2 kg CO2e") and trees planted, a hairline divider, then "From" with a bold baht price at left and a coral reward-points figure at right. Destination tiles overlay the place name and the count of eco experiences in white on the photograph.

## Elevation & Depth
The system uses a signature soft card shadow, `--shadow-card`: `0 1px 2px oklch(27% .05 265/.05), 0 8px 24px -12px oklch(27% .05 265/.18)`, measured on 14 cards and links. Buttons use a Tailwind-style small shadow (`0px 1px 3px` and `0px 1px 2px -1px` at 10 percent black, 15 uses). Other root shadows are `--shadow-lift` (`0 20px 40px -18px oklch(27% .05 265/.35)`) and `--shadow-phone` (`0 32px 70px -18px oklch(8% .04 265/.72)`). Navy-tinted shadows keep elevation consistent with the palette.

## Shapes
Pills dominate controls: 9,999px (55 uses) for buttons, tabs, chips and filters. Cards and tiles use 22px (18 uses) and 18px (17), with 14px, 26px, 12px, 29.6px and 40px for others. The root `--radius` is `.875rem` (14px). The result is a friendly, very rounded look with image-led cards.

## Components
**button-primary**: navy `#1a263f` fill, `#f6f9fc` text, Inter 12px weight 500, pill radius, padding 8px 16px, height 32px, with the small button shadow ("Tours & Experiences" tab pill).
**button-secondary**: same navy pill at 14px weight 600, padding 8px 16px, height 36px.
**Search / confirm actions**: green `#286648` with `#fcfcfc` text (the measured fill and the `--primary` mapping).
**link / card**: white, 22px radius, `--shadow-card`, padding 20px (the service tiles such as "Eco-Stays", 88px high).
**nav**: translucent white; nav-link Inter 16px weight 400.
**text-input**: 14px, height 20px.
**footer**: `#0d152a`, text `#ffffff99`, padding 48px 0px 32px, top border `#ffffff1a`.
The cookie dialog shown over the page in the capture (Customize Settings, Reject Non-Essential, Accept All) is a consent popup and is not documented as brand UI.

## Design System Architecture
No public design-system page was opened or linked from the home page. The CSS exposes a Tailwind 4 and shadcn-style token layer: roughly 103 root variables including semantic names (`--background`, `--foreground`, `--card`, `--popover`, `--primary`, `--secondary` as coral, `--accent` as emerald-soft, `--muted`, `--destructive`, `--border`, `--input`, `--ring`) mapped onto brand primitives (`--navy`, `--navy-deep`, `--navy-raised`, `--navy-soft`, `--emerald`, `--emerald-soft`, `--coral`, `--coral-soft`) in the OKLCH color space, plus named gradients and shadows (`--gradient-hero`, `--gradient-promo`, `--gradient-app-overlay`, `--shadow-card`, `--shadow-lift`, `--shadow-phone`). Typographic tokens follow Tailwind (`--tracking-tight` -.025em, `--leading-relaxed` 1.625).

## Do's and Don'ts
- Do use emerald `#286648` for primary actions and impact data, navy `#1a263f` for ink and for pill controls, and coral `#f5835b` only for promotions.
- Do show a quantified impact chip (kg CO2e, trees) on every product card.
- Do round controls as pills and cards at 22px.
- Do use the navy-tinted soft card shadow rather than neutral grey shadows.
- Don't put text directly on photographs without the navy gradient overlay.
- Don't use more than one promotional color on a screen.
- Don't treat the cookie dialog as a component.

## Responsive Behavior
At the 390px mobile pass the hero heading measured 24px, weight 700, line-height 30px, letter-spacing -0.6px in a 358px block (48px on desktop). The "Browse stays" button measured 12px type, 32px height and 110px width. Mobile font sizes by character count: 12px (513), 11px (231), 10px (191), 14px, 16px, 18px and 24px. The mobile header is a `#ffffffe6` bar showing "Preview", EN and THB with a coral Preview tag. Breakpoint widths were not measured.

## Iteration Guide
1. Start with canvas `#ffffff`, page `#f8fafc`, ink `#1a263f`, primary `#286648`, accent `#f5835b`.
2. Build a photographic hero with a navy gradient overlay and a white search card with pill tabs.
3. Use 22px white cards with the soft navy shadow and impact chips in mint `#d8f3e3`.
4. Set headings in Plus Jakarta Sans 700 with negative tracking and body in Inter.
5. Re-run the gate after edits.
