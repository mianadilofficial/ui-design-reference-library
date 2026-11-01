---
version: alpha
name: GranMonte
category: "Thai Brands"
description: "GranMonte, a Khao Yai winery site: a full-bleed vineyard photograph, centred white RoxboroughCF serif lettering, a mauve (#7f6d83) button, blush (#ddc9be) paper panels, and OpenSans 14px body text in near-black #212121."

colors:
  canvas: "#ffffff"
  surface-light: "#f9f9f9"
  ink: "#212121"
  primary: "#7f6d83"
  on-primary: "#ffffff"
  surface-blush: "#ddc9be"
  ink-deep: "#121212"
  ink-link: "#373637"
  ink-charcoal: "#333333"
  hairline: "#88919a"
  nav-text: "#5f2374"
  text-input-text: "#3f3f3f"
typography:
  display:
    fontFamily: RoxboroughCF
    fontSize: 28px
    fontWeight: 700
  heading:
    fontFamily: OpenSans
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17px
    letterSpacing: 2px
    textTransform: uppercase
  subheading:
    fontFamily: RoxboroughCF
    fontSize: 21px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: 3px
    textTransform: capitalize
  body:
    fontFamily: OpenSans
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: OpenSans
    fontSize: 8.91px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1px
    textTransform: capitalize
  link:
    fontFamily: OpenSans
    fontSize: 12.25px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: 1px
    textTransform: capitalize
  input:
    fontFamily: OpenSans
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 10px
  md: 15px
  lg: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 18px
  s8: 19px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 14px
    height: 28px
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    height: 48px
---

# GranMonte

## Overview
The measured site is https://www.granmonte.com/, the website of GranMonte Vineyard and Winery, described on the page as "Wine of Thailand" and as a family-owned sustainable vineyard and zero-waste winery in the foothills of Khao Yai National Park. The story page at https://www.granmonte.com/our-story gives 1999 as the founding year and names the founders as the sisters Mimi and Nikki Lohitnavy, with a 100 rai (40 acre) estate near Pakchong, Nakhon Ratchasima. The home page states a minimum age of 21 to enter and lists "Best National Producer - Thailand" at AWC Vienna in 2015, 2016, 2017, 2019, 2023 and 2024. Main navigation: Home, Our Wines, Our Story, Accommodation, Visit, News, Contact Us, plus a phone number.

The capture shows the identity clearly. A very tall hero photograph of vine rows leading to limestone hills at golden hour carries the wordmark "GRANMONTE" in wide-tracked white serif capitals, with "WINE OF THAILAND" and "KHAO YAI WINE GEOGRAPHICAL INDICATION" beneath, a small wine-glass icon flanked by "EST." and "1999", and one small mauve button, "Explore Our Wines". Below it a blush, paper-textured band carries a centred paragraph, the award headline in serif and a white panel of competition medals (gold and trophy discs, AWC Vienna marks). A news section follows. During capture an age-verification layer ("Are you 21 or over?", with a "Return" outcome for under-age visitors) dimmed the lower half of the page; it is a legal gate, not brand UI, and its controls are not documented as components.

The voice is calm, factual and heritage-oriented; headlines are in serif title case, labels in small tracked capitals.

## Colors
The palette is earthy and restrained. White (`canvas`, #ffffff) and very light grey (`surface-light`, #f9f9f9) are the main page grounds. A blush-beige (`surface-blush`, #ddc9be) forms the paper-textured intro band. Text is near-black: `ink` #212121 is by far the most-read colour, with #121212 (`ink-deep`), #333333 (`ink-charcoal`) and #373637 (`ink-link`) for headings and links. The brand accent is a muted mauve (`primary`, #7f6d83), used for the hero button fill with white text (`on-primary`, #ffffff) and for some headings. A saturated purple (`nav-text`, #5f2374) was measured on the navigation labels, and a cool grey (`hairline`, #88919a) as a border. The input text colour is #3f3f3f. A semi-transparent black layer (the dimming scrim from the age gate) was also measured and is not a brand colour.

Keep the system muted: mauve and blush against white, with imagery supplying green and gold. Avoid bright wine-red clichés; none are measured.

## Typography
Two families are loaded: RoxboroughCF (regular and bold), a serif used for the wordmark-adjacent lines and headlines, and OpenSans (regular and 500) for everything functional. Measured roles: `display` RoxboroughCF 28px bold (the largest serif size measured, also used by the age prompt); `subheading` RoxboroughCF 21px bold, 26px line height, 3px letter-spacing, capitalised, on card titles such as "GranMonte Wine Cottage"; `heading` OpenSans 14px weight 500, 17px line height, 2px letter-spacing, uppercase, used for labels such as the vertical "ENQUIRY"; `body` OpenSans 14px on a 25.2px line; `link` OpenSans 12.25px with 1px tracking; `button` OpenSans 8.91px with 1px tracking; and `input` OpenSans 13.3333px. The 8.91px button size is a measured computed value for the hero button and is extremely small, so treat it as the site's own quirk rather than a recommended size.

Font substitutes: RoxboroughCF is a commercial typeface; a Roxborough-like transitional serif such as Cormorant Garamond or Playfair Display will approximate it, and OpenSans is available on Google Fonts.

## Layout
The home page is a vertical stack of full-width bands: hero photograph, blush intro band with centred copy, a white medal panel overlapping the band's lower edge, news cards, and further sections for wines, accommodation and visits. Content is centred, line lengths are moderate, and body text uses a generous 1.8 ratio (25.2px on 14px). Spacing values measured are 6, 8, 9, 10, 14, 15, 18, 19, 20 and 25px; the text input uses 15px 20px padding and is 48px tall, and the hero button 6px 14px at 28px tall. The top navigation sits on a white bar with a faint divider and has a logo at left, the seven labels and a phone number at right.

## Elevation & Depth
Depth is photographic. Beyond the hero image, the white medal panel overlaps the edge of the blush band, and the only measured box shadow is a large soft 2px 2px 20px black shadow on the panel that holds the age-gate prompt, so it is not carried into the tokens. Content bands themselves are flat. Do not add shadows to buttons or text blocks.

## Shapes
Controls are square: the hero button, link and input all use 0px radius (`rounded.none`). Measured radii of 8px, 10px, 15px and 24px exist on some other elements and are retained as `xs`, `sm`, `md` and `lg`, along with a pill (9999px) and 50 to 100% circles on icon elements such as the floating chat and scroll controls. For brand pages, prefer sharp corners to match the primary button.

## Components
**Primary button** (`button-primary`): mauve #7f6d83 fill, white text, OpenSans 8.91px with 1px tracking, capitalised, 6px 14px padding, 28px high, 0px radius. It reads "Explore Our Wines".

**Navigation** (`nav`, `nav-link`): purple #5f2374 text in OpenSans 14px weight 500, capitalised, on a white bar.

**Link** (`link`): #373637, OpenSans 12.25px with 1px tracking, capitalised; used for news titles and Read More.

**Text input** (`text-input`): white fill, #3f3f3f text, OpenSans 13.3333px, 15px 20px padding, 48px high, square corners; used in the enquiry form.

**Medal panel**: a white block containing competition badges and the AWC Vienna marks, under the heading "GRANMONTE WINNERS OF 2024" in tracked capitals.

The age-verification layer, its Yes and Return buttons, the floating chat bubble and the scroll-to-top control are functional widgets and are not brand components.

## Design System Architecture
No public design system or brand guideline was found on the pages opened. The shipped CSS shows Font Awesome 6 (Free and Brands) for icons and custom @font-face rules for RoxboroughCF and OpenSans; there are no named brand tokens, so the de-facto system is the typography pairing, the mauve accent and the blush paper band. Sources opened: https://www.granmonte.com/ and https://www.granmonte.com/our-story.

## Do's and Don'ts
- Do lead with a landscape photograph of the vineyard and centre the wordmark in white serif capitals.
- Do pair RoxboroughCF headings with OpenSans body at 14px/25.2px.
- Do use mauve #7f6d83 for the single primary action and keep corners square.
- Do use the blush #ddc9be paper band to separate story from news.
- Don't use the dimming scrim, age-gate controls or chat bubble as design elements.
- Don't add bright reds or gradients; the palette is mauve, blush, white and near-black.
- Don't scale the 8.91px button text down further; if enlarging, re-measure first.
- Don't use drop shadows on buttons or cards.

## Responsive Behavior
Measured data covers desktop only for this site beyond the capture, so mobile values are not stated. The hero photograph spans the full width and the wordmark stays centred; the navigation has seven labels. Narrow-screen behaviour of the navigation, news cards and medal row was not measured.

## Iteration Guide
1. Open with a wide, golden-hour vineyard photograph and a centred white RoxboroughCF wordmark with tracked subtitle lines.
2. Place one mauve (#7f6d83) button under the subtitle, square, with white capitalised OpenSans text.
3. Follow with a blush (#ddc9be) paper-texture band holding 14px/25.2px OpenSans copy in #212121 and a serif award headline.
4. Show awards as a white panel of medal badges.
5. Use #5f2374 only for navigation labels, and keep other text in the near-black family.
6. Treat age gates and chat widgets as overlays outside the system.
7. Re-measure at https://www.granmonte.com/ before adding any value that is not in the frontmatter.
