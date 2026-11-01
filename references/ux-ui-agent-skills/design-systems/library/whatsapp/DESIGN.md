---
version: alpha
name: WhatsApp
category: "Media & Consumer Tech"
description: "WhatsApp's site sits on a warm cream canvas (#fcf5eb) with deep #111b21 bands and a mint #e6ffda strip; WhatsApp green #25d366 fills 50px-radius pill buttons with dark #1c1e21 text and a 1px outline, and WhatsApp Sans Var headlines run large and light at 80px/400."
colors:
  canvas: "#fcf5eb"
  page-body: "#ffffff"
  ink: "#1c1e21"
  primary: "#25d366"
  on-primary: "#1c1e21"
  surface-dark: "#111b21"
  surface-mint: "#e6ffda"
  ink-muted: "#5e5e5e"
  ink-light: "#f0f4f9"
  link-hover: "#00803e"
typography:
  display:
    fontFamily: "\"WhatsApp Sans Var\", sans-serif"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"WhatsApp Sans Var\", sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 44px
  heading:
    fontFamily: "\"WhatsApp Sans Var\", sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  body:
    fontFamily: "\"WhatsApp Sans Var\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: "\"WhatsApp Sans Var\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 25px
  sm: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 13px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 28px
    height: 53px
    border: "1px solid #1c1e21"
  button-primary-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 45px
    border: "1px solid #1c1e21"
  button-login:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 14px 20px
    height: 46px
    border: "1px solid #111b21"
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-link-hover:
    textColor: "{colors.link-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 16px 60px
    height: 80px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.page-body}"
---

# WhatsApp

## Overview

WhatsApp's home page (https://www.whatsapp.com/, title "WhatsApp | Secure and Reliable Free Private Messaging and Calling") is warm and photographic. The visible canvas is a soft cream, `#fcf5eb`, which covers most of the 7,933px scroll. It is broken by one deep green-black band (`#111b21`, "Speak freely"), a pale mint strip (`#e6ffda`) behind "Stay up to date", and a dark footer. The hero is a large rounded photo panel (a woman smiling at her phone, with floating chat bubbles) carrying the white headline "Message privately", the subline "Simple, reliable, private messaging and calling for free*, available all over the world." and a green "Download" pill.

The page continues as alternating image-and-text rows: "New! Call on WhatsApp Web", a centred manifesto ringed by avatar chat bubbles in several languages ("Bonjour", "Привет", "Hello friends"), "Never miss a moment with voice and video calls", "Get WhatsApp for Mac", "Speak freely" (with a scrambled-text encryption animation), "Keep in touch with your groups", "Say what you feel", "Transform your business", then a "Stay up to date" news carousel.

The visual language pairs candid lifestyle photography with WhatsApp UI screenshots, stickers and chat bubbles. The copy is short and personal: "With private messaging and calling, you can be yourself, speak freely and feel close to the most important people in your life no matter where they are." Every row ends in a "Learn more >" text link.

## Colors

- **Canvas `#fcf5eb`.** Warm cream, the largest measured background (7,958 area units) and the dominant colour on screen (55% of the capture). The header uses it too.
- **Page body `#ffffff`.** The `<body>` element's own computed background (hidden under the cream sections), the "Log In" fill and the footer's text colour.
- **Ink `#1c1e21`.** The most-read text colour (1,197 characters) and the outline colour of the green pills.
- **Primary `#25d366`.** WhatsApp green: every "Download" pill and "Download Mac app". Also among the most frequent colours in the shipped CSS.
- **On-primary `#1c1e21`.** Text on green is dark, not white.
- **Surface dark `#111b21`.** The "Speak freely" band and the footer (1,927 area units).
- **Surface mint `#e6ffda`.** The "Stay up to date" strip.
- **Ink muted `#5e5e5e`.** Fine print such as "*Data charges may apply. Contact your provider for details."
- **Ink light `#f0f4f9`.** Light text on the dark band.
- **Link hover `#00803e`.** "Try it" and "Learn more" links turn this darker green on hover.

The CSS also declares `#43cd66`, `#128c7e` and `#103928` greens and the greys `#cdd0d5` and `#c4d0d4`. None of these was measured on a rendered home-page element.

## Typography

One family: **WhatsApp Sans Var**, a proprietary variable font loaded at weights 400, 500 and 700. Headlines are set large at the regular weight (400), never bold, which gives a calm, friendly tone.

- **Display.** 80px/400 with a solid 80px line height: "Message privately", white on the hero photo.
- **Heading.** 60px/400, 60px line height: "New! Call on WhatsApp Web", "Speak freely", "Keep in touch with your groups". A 48px size (152 characters) is used for the centred manifesto paragraph.
- **Body.** 18px/400 with 25px leading, the dominant size (1,188 characters).
- **Button.** 16px/500 with a 16px line height, used for pills, "Learn more" links and nav items.
- **Small.** 12px for fine print and footer meta.

No letter-spacing was measured. If WhatsApp Sans is unavailable, the declared fallback is the generic `sans-serif`; Roboto and Helvetica also appear in the CSS.

## Layout

Measured at 1280px wide. The 80px header has 16px 60px padding: the logo at the left, then Features (dropdown), Privacy, Blog, Apps, Help Center (external) and For Business (external), with "Log In" and "Download" pills at the right. Content sits in a centred column with generous side margins, and each feature row splits into image and text halves that alternate sides. The text block always follows the same order: a 60px heading, an 18px paragraph, then a "Learn more >" link. Vertical spacing between rows is large; the page is airy and photo-led.

Measured gaps include 16px (most frequent), 24px, 40px and 56px; paddings include 13px, 24px, 32px, 56px, 88px and 96px. Media-query breakpoints in the CSS cluster at `max-width: 767px` (87 rules), `min-width: 768px` (54), `min-width: 1024px` (23) and `1095px` / `1096px` (19 and 16).

## Elevation & Depth

No box shadows were measured on rendered elements; the page is flat colour fields plus photography. The CSS defines shadows for other components (`10px 10px 34px #0003`, `0 10px 50px #0000000d`, `0 10px 30px #0003, 0 4px 6px #0000001a`). In the capture, depth comes from the chat-bubble overlays layered on the photos and from device screenshots that overlap their image panels. The dark `#111b21` band is the strongest tonal shift on the page.

## Shapes

Pills dominate. Every button uses a 50px radius (six elements), making it a full capsule. Avatars and round icons use 50%. A 25px radius was measured on two further elements; in the capture, the hero photo panel and the news cards also have rounded corners. The CSS corpus adds 24px, 32px, 40px and 56px radii for other components. Chat bubbles and stickers in the imagery repeat the rounded, friendly shape language.

## Components

- **Primary pill.** "Download": `#25d366` fill, `#1c1e21` 16px/500 text, a `1px solid #1c1e21` outline, 50px radius, 16px 28px padding, 53px tall. Another measured instance uses 16px 32px padding.
- **Compact pill.** The header "Download": the same styling at 12px 20px padding and 45px tall.
- **Log In pill.** White fill, dark text, `1px solid #111b21` outline, 50px radius, 14px 20px padding, 46px tall.
- **Text link.** "Learn more >" / "Try it >": dark 16px/500 with a chevron, turning `#00803e` green on hover.
- **Hero panel.** A large rounded photo with the white 80px headline, an 18px subline and a green pill.
- **Feature row.** A 60px heading, an 18px paragraph and a text link beside a screenshot or photo.
- **News card.** A white rounded card in the "Stay up to date" carousel with the WhatsApp icon, a bold title, an excerpt and an outlined "Read More" pill; round previous/next arrows sit below.
- **Footer.** `#111b21` with white text: the logo, then link columns (What we do, Who we are, Use WhatsApp, Need help?), a green "Download" pill on mobile, and legal links.

## Design System Architecture

WhatsApp's site links its "Brand Center" in the footer (https://www.facebook.com/brand/resources/whatsapp/whatsapp-brand, which redirects to https://www.meta.com/brand/resources/whatsapp/whatsapp-brand/). That page publishes logo usage rules ("You shouldn't modify any colors in our logos", "DON'T combine the WhatsApp name or logos … with any other logo") and a logo pack download behind a guideline acceptance. It does not publish colour values or typefaces. The marketing site's de facto system is visible in its CSS: a single variable family (`WhatsApp Sans Var`), a short green palette (`#25d366`, `#43cd66`, `#128c7e`, `#103928`), dark neutrals (`#111b21`, `#1c1e21`), the cream canvas, and the 50px pill. No CSS custom properties were measured on `:root` (`rootVars` is empty).

## Do's and Don'ts

**Do**
- Use the cream `#fcf5eb` canvas, not pure white, for marketing pages.
- Fill primary actions with `#25d366` and dark `#1c1e21` text, as fully rounded pills with a 1px dark outline.
- Set headlines large (60–80px) at weight 400.
- Pair lifestyle photography with real WhatsApp UI, chat bubbles and stickers.
- Use one dark `#111b21` band for the encryption/privacy story.

**Don't**
- Don't put white text on the green pill; the measured text is dark.
- Don't use bold headlines; the measured weight is 400.
- Don't modify the logo colours or combine the logo with others (Brand Center rules).
- Don't square off buttons; every action is a 50px pill.

## Responsive Behavior

Measured at 390px wide. The hero headline drops from 80px to **44px/44px**, and section headings from 60px to 32px/32px. Body text drops from 18px/25px to 16px/22px. The green "Download" pill keeps its desktop spec (16px 28px padding, 53px tall, 50px radius). The header padding becomes 12px 24px (77px tall); two header links were measured as visible, and a "Navigation menu" toggle was measured as visible. In the mobile capture the hero photo panel holds the headline, subline and pill. Feature rows appear text first, then image, in a single column. The "Stay up to date" carousel shows one and a half cards, and the footer columns appear two per row with a green "Download" pill above them. Content runs from x 24 to x 366 (a 24px side inset).

## Iteration Guide

1. Start with the cream `#fcf5eb` canvas, `#1c1e21` text and WhatsApp Sans at weight 400.
2. Build the hero as a rounded photo panel with an 80px white headline (44px on mobile) and one green pill.
3. Add alternating image/text rows: a 60px heading, an 18px/25px paragraph, a "Learn more >" link.
4. Make every action a 50px-radius pill: green with a dark outline for primary, white with a dark outline for secondary.
5. Use `#111b21` for one dramatic band and the footer, and mint `#e6ffda` for a light news strip.
6. Check the capture: photography and chat bubbles should carry the warmth; the UI stays flat.
