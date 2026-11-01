---
version: alpha
name: Channel G Company Limited
category: "Thai Brands"
description: "cng.co.th, Channel G's Thai IT-services site: a full-screen slide deck with white Prompt type at 72px/700 and 18px/300, 0.5px tracking, slides filled #71911b, #9a004c, #ca9800, #11769e and #790707, a white side rail and 2px white outline pill buttons."
colors:
  canvas: "#ffffff"
  ink: "#232728"
  ink-black: "#000000"
  primary: "#212331"
  black-slide: "#171717"
  slide-green: "#71911b"
  slide-magenta: "#9a004c"
  slide-gold: "#ca9800"
  slide-blue: "#11769e"
  slide-red: "#790707"
  border-gray: "#535353"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: 0.5px
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    letterSpacing: 0.5px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: 0.5px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 25px
    letterSpacing: 0.5px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 25px
    letterSpacing: 0.5px
    textTransform: uppercase
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: 0.5px
    textTransform: capitalize
rounded:
  xs: 50px
  pill: 9999px
spacing:
  s1: 10px
  s2: 13px
  s3: 14px
  s4: 15px
  s5: 20px
  s6: 20.8px
  s7: 30px
  s8: 35px
  s9: 48px
  s10: 89px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10px 48px
    height: 53px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10px 48px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
---

## Overview

`https://www.cng.co.th/` is the corporate site of CHANNEL G COMPANY LIMITED (page title "CHANNEL G COMPANY LIMITED", footer line "© CHANNEL G COMPANY LIMITED 2021."), a Thai IT-services business whose hero headline reads "มีทุกบริการด้านไอที ถูกและดีมีอยู่จริง" (every IT service, cheap and genuinely good). The site is built as a full-screen slide deck rather than a scrolling page: the recorded document height is 800px (one viewport) and the `body` element measures 1280px by 0px, so the content lives in viewport-sized panels moved by a pager. A narrow white rail on the left (its width was not measured) holds a hamburger menu icon, a vertical pager of six outlined round dots with the current one marked by a dash on each side, and a round logo at the bottom. Facebook and Instagram icons sit at the top right, and the copyright sits at the bottom right in white.

The first slide in the capture is a flat olive green field. Behind the content are faint line-art circles holding technology pictograms (a person at a desk, gears, a chart board, a power symbol), like a heads-up display. At left sit the 72px bold white headline, a three-line paragraph in light weight ("เราคือผู้จัดทำแพลตฟอร์ม ระบบต่างๆ ทางด้านไอทีแบบครบวงจร ..." and the quote "เทคโนโลยีเป็นของทุกคน", technology belongs to everyone) and a white-outline pill button "บริการของเรา" (Our services). At right a portrait photograph of a woman is masked into an organic blob shape with two translucent, offset blob outlines behind it.

Other measured headings are "เกี่ยวกับเรา" (About us) at 48px and "พร้อมสนับสนุนและแก้ไขปัญหาทุกเมื่อ" (Ready to support and solve problems any time) at 28px. The slide menu lists "หน้าแรก" (Home), "เกี่ยวกับ" (About), "ทีมงานของเรา" (Our team), "บริการทั้งหมด" (All services), "ลูกค้าของเรา" (Our customers) and further items that the measurement truncated. The voice is friendly and plain, with a mission-style claim rather than product jargon.

## Colors

The page background in the CSS is white, but each slide carries its own saturated flat fill, and all slide fills are equal in measured area (973 units each):

- **Slide green `#71911b`**: the first slide, behind the headline.
- **Slide magenta `#9a004c`**, **slide gold `#ca9800`**, **slide blue `#11769e`** and **slide red `#790707`**: the other four measured slide fills. The capture shows only the first slide, so the content of the others was not seen.
- **Black slide `#171717`** (5,888 units) is a larger dark area whose role the capture does not show.
- **Canvas `#ffffff`** (45,801 units) is the white of the side rail and of the page behind the panels; text on white uses **ink `#232728`** (1,497 characters) and **`#000000`** (84) in the slide menu.
- **Primary `#212331`** was assigned by the generator from a color measured on 15 characters; the site has no filled call-to-action button, so no fill is attributed to it here.
- **White** is the dominant text color on slides (6,714 characters) and the color of the outline button border and label.
- **Border gray `#535353`** is measured on six borders and as the shadow color `rgb(83, 83, 83) 1px 1px 10px 0px`.

The stylesheet exposes Bootstrap 4 color variables (`--primary: #007bff`, `--danger: #dc3545`, `--success: #28a745`, `--warning: #ffc107` and others). They are framework defaults, not brand colors; the measured text, buttons and slides do not use them.

## Typography

One family, **Prompt**, loaded at 300, 400, 600 and 700 (plus a 700 italic), covers every measured character (8,310 of 8,310). Icon fonts (LineIcons, Font Awesome 5 Free and Brands, Line Awesome) are loaded for the pager and social glyphs. Every measured size carries a 0.5px letter-spacing.

- **Display**: Prompt 72px / 72px, weight 700, white, 0.5px tracking, for the h1 (635px wide, 144px tall, two lines). Mobile measured 32px / 32px (360px wide, 64px tall).
- **Heading**: Prompt 48px / 57.6px, weight 700, for "เกี่ยวกับเรา" (540px wide). Mobile measured 22px / 26.4px.
- **Subheading**: Prompt 28px / 33.6px, weight 500.
- **Body**: Prompt 18px / 25px, weight 300, white on color (1,110px wide, 75px tall on desktop; 12px / 18px, 360px wide and 126px tall on mobile).
- **Nav**: Prompt 16px / 25px, weight 600, uppercase transform (no effect on Thai script), black on the white menu panel (320px wide, 500px tall).
- **Button**: Prompt 16px / 28.8px, weight 700, capitalize transform, white.
- Sizes by characters: 18px (4,863), 16px (1,781), 22px (1,475), 48px (70), 72px (37), 28px (34), 24px (22), 14px (15), 30px (13).

Font substitute if Prompt is unavailable: a Thai-capable geometric or humanist sans with 300, 500, 600 and 700 cuts; this is a suggestion, not a measurement.

## Layout

The layout is a single-viewport slide: a 1280px-wide stage with a white left rail, left-aligned text and an image panel on the right. The paragraph box measured 1,110px wide in the extraction, the h1 635px and the other headings 540px, so text blocks align on a shared left edge. The pager is a vertical column of six circles at the left rail's middle; the hamburger icon is at its top and a circular logo at its bottom.

Measured paddings: 15px (248 uses), 10px (188), 14px (150), 48px (76, the button's horizontal padding), 20.8px (56), 30px (3), 13px and 20px (2 each), 89px (2). No `gap` values were measured. Because the document height is one viewport, vertical rhythm is set inside each slide rather than between sections.

## Elevation & Depth

Flat. The only box shadows measured are a `rgba(0, 0, 0, 0) 0px 0px 0px 7px inset` ring on six elements (the pager dots) and a single `rgb(83, 83, 83) 1px 1px 10px 0px`. Depth in the capture comes from translucency and layering: line-art circles at low opacity behind the content, and two translucent offset blob outlines behind the portrait. No gradient fills were measured on CSS roles.

## Shapes

Round and organic. Measured radii are `50%` (81 uses, circles such as the pager dots and icons) and `50px` (80 uses, the outline pill buttons). The portrait photograph is clipped to an irregular blob shape, with two translucent blob outlines offset behind it; these shapes are image masks, not CSS radii. There are no square-cornered controls in the measurement.

## Components

- **Outline pill button**: transparent fill, 2px solid white border, white Prompt 16px / 700 label, 50px radius, `10px 48px` padding, 200×53px ("บริการของเรา"). There is no filled button on this page, and hover states were not recorded.
- **Pager**: six small outlined circles in a vertical column on the white rail, the active one flanked by two short horizontal lines.
- **Hamburger menu**: three-line icon at the top of the rail; the menu panel it opens measured 320px by 500px with black 16px / 600 links.
- **Social icons**: Facebook and Instagram glyphs, white, top right.
- **Portrait mask**: organic blob-shaped photo with translucent offset outlines.
- **Background pictograms**: faint line-art circles with technology symbols on each slide.
- **Footer line**: "© CHANNEL G COMPANY LIMITED 2021." in white, bottom right, set in capitals with wide spacing in the capture.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (`https://www.cng.co.th/`). The de-facto system is a Bootstrap 4 site with a slide-deck script. The shipped `:root` exposes Bootstrap's variable set, including `--breakpoint-xs: 0`, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px` and the framework color names (`--blue`, `--indigo`, `--pink`, `--teal`, `--gray-dark` and others), none of which the measured components use. Icon fonts are `LineIcons`, `Font Awesome 5 Free`, `Font Awesome 5 Brands`, `Line Awesome Free` and `Line Awesome Brands`. The brand layer is the slide fills, white Prompt type with 0.5px tracking, and the outline pill button.

## Do's and Don'ts

Do:
- Use one flat saturated color per slide with white Prompt text on it.
- Set headlines at 72px / 700 and body at 18px / 300 with 0.5px letter-spacing.
- Use the white 2px-outline pill (`50px` radius, `10px 48px` padding) as the call to action.
- Keep a white side rail with a hamburger, a pager and the round logo.

Don't:
- Don't use Bootstrap's `#007bff` or other framework variables as brand colors.
- Don't add drop shadows or gradient fills; the measured page has none on text or buttons.
- Don't fill the pill button; the measured style is outline only.
- Don't describe slides other than the first without capturing them.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the h1 drops from 72px / 72px (635×144px) to 32px / 32px (360×64px); the "เกี่ยวกับเรา" heading drops from 48px / 57.6px to 22px / 26.4px (360×26px); the body paragraph drops from 18px / 25px (1,110×75px) to 12px / 18px (360×126px). The mobile font-size table by characters is 18px (3,127), 12px (2,290), 22px (1,508), 16px (1,110), 24px (69), 32px (37), 14px (10). The side rail, pager and button layout at mobile width were not recorded, so they are not measured. Bootstrap's declared breakpoints are 576px, 768px, 992px and 1200px; which of them applies to each change was not measured. Tablet widths and dark mode were not measured.

## Iteration Guide

1. Build each slide as a full-viewport flat color (`#71911b`, `#9a004c`, `#ca9800`, `#11769e`, `#790707`) with white Prompt text.
2. Set the h1 at 72px / 72px / 700 (32px on mobile) and body at 18px / 25px / 300, with 0.5px letter-spacing on every size.
3. Add a white side rail with hamburger, six-dot pager and the round logo (rail width not measured).
4. Use one outline pill button (2px white border, 50px radius, `10px 48px`).
5. Mask a portrait to a blob shape with two translucent offset outlines; add faint line-art pictograms behind.
6. Capture the other slides before documenting them.
