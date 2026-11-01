---
version: alpha
name: CREA
category: "Thai Brands"
description: "CREA (Thai e-commerce enabler) design system: proxima-nova with a 100px weight-900 uppercase hero, off-white #fdfcfc canvas, teal #36b3a8 pill buttons with 300px radius, purple #750c92e0 section headings and a charcoal #1f1f1f footer."
colors:
  canvas: "#fdfcfc"
  ink: "#1a1a1ae0"
  primary: "#36b3a8"
  on-primary: "#ffffff"
  surface-hero-black: "#000000"
  surface-footer: "#1f1f1f"
  ink-subheading: "#1a1a1ae6"
  accent-purple: "#750c92e0"
  ink-on-dark-muted: "#ffffff66"
typography:
  display:
    fontFamily: proxima-nova
    fontSize: 100px
    fontWeight: 900
    lineHeight: 100px
    letterSpacing: 1px
    textTransform: uppercase
  heading:
    fontFamily: proxima-nova
    fontSize: 24px
    fontWeight: 900
    lineHeight: 26.4px
    letterSpacing: 1.92px
    textTransform: uppercase
  body:
    fontFamily: proxima-nova
    fontSize: 26px
    fontWeight: 400
    lineHeight: 28.6px
  button:
    fontFamily: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 900
    letterSpacing: 2.1px
    textTransform: uppercase
rounded:
  xs: 300px
spacing:
  s1: 7px
  s2: 10px
  s3: 12px
  s4: 17px
  s5: 20px
  s6: 21px
  s7: 32px
  s8: 34px
  s9: 64px
  s10: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 21px 34px
    height: 63px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 21px 34px
    height: 63px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 0px 44.75px
  nav:
    textColor: "{colors.ink}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-on-dark-muted}"
---

# CREA

## Overview
CREA (copyright line: "Crea Co Ltd. 2020-2021"; page title "CREA: Unlock Your Ecommerce Potential") is an e-commerce enabler operating in Thailand and Southeast Asia, offering livestream commerce, store management, technology integration and e-fulfillment for brands. The home page opens with a full-bleed dark hero: a glowing field of yellow code snippets, plus signs and dotted grids, with a small white logo at the top-left, a hamburger menu at the top-right and the centered white headline "THE ONE-STOP OMNICHANNEL SOLUTION FOR BRANDS" in huge heavy uppercase. Below it the page switches to an off-white canvas and a single centered column: a purple uppercase section heading ("SHOPTAINMENT AND LIVESTREAMING – THE FUTURE OF ECOMMERCE!"), a large photograph (a phone showing the TikTok logo), a bold sub-heading ("CONTENT PRODUCTION"), a paragraph and a teal pill button "LEARN MORE". Thin horizontal rules divide sections, and a row of platform certification badges (Shopee Premium, Lazada 3-Star and Partner of the Year, TikTok Shop Partners) follows under "CERTIFIED TOP ENABLER BY LEADING PLATFORMS". The voice is upbeat and agency-like: "Shoptainment", "brands we love", "Watch this space...".

## Colors
Canvas is a warm off-white `#fdfcfc`; text is near-black `#1a1a1a` at 88 to 90 percent opacity (`#1a1a1ae0` and `#1a1a1ae6`). The action color is teal `#36b3a8` with white text, used on all measured buttons ("GET IN TOUCH", "LEARN MORE", "CONTACT US"). Section headings are purple `#750c92e0` (99 characters of purple text in the capture), a second brand accent that gives the page its identity next to the teal. The hero is black `#000000` with a dark `#1f1f1f` base, and the footer is `#1f1f1f` with white-at-40-percent text `#ffffff66` (also the muted color on dark). Translucent black fills `#00000012` and `#0000001a` are the image-overlay and banner tints. No framework preset colors are present; the only root variables are Squarespace commerce mini-cart sizes (`--commerce-mini-cart-image-size` 60px).

## Typography
One family, proxima-nova (Adobe Fonts), accounts for all 1,333 measured characters; weights 300, 400, 500, 600, 700 and 900 plus italics are loaded, together with adobe-garamond-pro and proxima-soft (not seen in measured text). The hero headline is 100px, weight 900, line-height 100px, letter-spacing 1px, uppercase, white. Section headings are 24px weight 900, uppercase, letter-spacing 1.92px (purple), line-height 26.4px; sub-headings such as "CONTENT PRODUCTION" use 24px with 1.08px letter-spacing in near-black. Paragraph text is 26px weight 400 with 28.6px line-height, large for body copy. Button labels are 14px weight 900, uppercase, letter-spacing 2.1px. The scale is therefore only a few steps: 100, 26, 24, 14 and 12px. Proxima Nova is a licensed typeface; substitutes would be Montserrat or Nunito Sans.

## Layout
The desktop capture is 1,280px wide and 6,863px tall. The hero is full width with centered text. Content below sits in one centered column, with full-width photographs, centered buttons and thin full-column rules. The site is built on Squarespace (the markup and CSS reference it throughout), which gives it its stacked section structure. Measured paddings are 17px (61 uses), 21px, 34px, 32px, 20px, 64px, 96px and 180px; button padding is 21px 34px. The navigation lists Home, Live Streaming, Store Management, Tech Integration, E-fulfillment, News, Let's Connect, Join Us, TikTok Acceleration and TikTok Acceleration TH.

The rest of the home page continues in the same pattern, one service per block, each with a heading, a short paragraph and a pill button: Store operations ("Our store strategy & content management are divided into Onboarding and Maintenance to support brand growth"), CUSP Omnichannel Technology ("Efficiently manage your omnichannel operations and leverage your current stock across all channels"), E-fulfilment ("We store, pack, and ship your products"), a "brands we love" logo section, Social Commerce (marketing plans by category strategy and channel selection) and BRAND.com, described as a more focused audience for a brand's core customers and marked "Coming in 2021". The copy is short and benefit-led, and the repeated structure keeps the long page easy to scan.

## Elevation & Depth
No box shadows or borders were measured. Depth is created by contrast between the black hero and the off-white body, by photography, and by translucent black tints on images. The hero uses a glowing, layered code-and-light image rather than interface effects.

In the capture the certification badges sit on a white strip inside the column, evenly spaced in a row of four, and the hero image is contained in a black band that ends in a hard horizontal edge against the off-white canvas, so the transition between the two modes of the page is abrupt rather than faded. Text blocks are left-aligned under left-aligned headings, while the buttons and the hero text are centered.

## Shapes
The only measured radius is 300px (five uses), which makes the buttons full pills. Photographs and certification badges are rectangular or shield shapes with no measured corner radius. The geometry is therefore pill buttons against sharp-cornered content blocks.

## Components
**button-primary**: teal `#36b3a8` fill, white text, proxima-nova 14px weight 900 uppercase with 2.1px letter-spacing, radius 300px, padding 21px 34px, height 63px ("GET IN TOUCH", 192px wide).
**button-secondary**: identical styling ("LEARN MORE", 180px wide; "CONTACT US", 178px wide).
**nav / nav-link**: text in `#1a1a1ae0` with 0px 20px padding; the capture shows a hamburger icon on the dark hero.
**link**: 26px body text in the ink color.
**footer**: `#1f1f1f` background with `#ffffff66` text, a "UNLOCK YOUR E-COMMERCE POTENTIAL" tagline, Privacy Policy and Cookie Policy links and the copyright line.
The "Back to Top" control in the markup is not documented as brand UI.

## Design System Architecture
No public design system or brand guideline page was opened or linked from the home page; the site is a Squarespace template. The de-facto system is a small set of values: off-white canvas, teal action, purple heading accent, black and charcoal bands, proxima-nova in two weights (400 and 900) and pill buttons. Squarespace supplies the structural CSS (the only root variables are commerce mini-cart sizes), so styling lives in the template's own classes rather than in custom properties.

## Do's and Don'ts
- Do use teal `#36b3a8` pills with uppercase heavy labels for every action.
- Do set section headings in purple `#750c92e0` uppercase at 24px weight 900.
- Do pair a very large 100px uppercase white hero headline with a dark, busy tech-style background image.
- Do keep body paragraphs at 26px in near-black on the off-white canvas.
- Don't add shadows or borders; none were measured.
- Don't use rounded corners on photographs.
- Don't document the Back to Top control as a component.

## Responsive Behavior
At the 390px mobile pass the purple heading measured 24px, weight 900, line-height 26.4px, letter-spacing 1.92px in a 350px block (the same size as desktop). The primary button kept 14px type, 21px 34px padding, 300px radius, 63px height and 192px width. Mobile font sizes by character count: 26px (1,008), 22px (112), 24px (99), 14px (52), 30px (44), 12px and 13px; a 30px size with the same character count as the 100px desktop headline (44) appears on mobile. The header on mobile shows a hamburger; breakpoint widths were not measured.

## Iteration Guide
1. Use canvas `#fdfcfc`, ink `#1a1a1ae0`, teal `#36b3a8`, purple `#750c92e0`, charcoal `#1f1f1f`.
2. Open with a full-bleed dark hero and a centered 100px/900 uppercase headline.
3. Switch to a single centered column with purple uppercase headings, large photography and pill buttons.
4. Close with a charcoal footer.
5. Re-run the gate after edits.
