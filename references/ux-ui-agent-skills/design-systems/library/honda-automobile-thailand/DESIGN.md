---
version: alpha
name: Honda Automobile Thailand
category: "Thai Brands"
description: "Honda Automobile Thailand (honda.co.th/en) measured live: dbHeaventFont throughout, Honda red #cc0100 GET DEAL button with square corners, #303030 headings on a #f0f0f0 and white canvas, #373f4e slate footer, 42.6667px display text, outlined Discover More buttons and photographic car heroes."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  ink: "#303030"
  primary: "#cc0100"
  on-primary: "#ffffff"
  surface-2: "#373f4e"
  ink-3: "#7d7d7d"
  ink-4: "#000000"
  ink-5: "#f7f7f7"
  ink-6: "#c0c0c0"
typography:
  display:
    fontFamily: dbHeaventFont, "dbHeaventFont Fallback"
    fontSize: 42.6667px
    fontWeight: 400
    lineHeight: 51.5556px
  display-mobile:
    fontFamily: dbHeaventFont, "dbHeaventFont Fallback"
    fontSize: 33.28px
    fontWeight: 400
    lineHeight: 33.28px
  body:
    fontFamily: dbHeaventFont, "dbHeaventFont Fallback"
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 19.5556px
  nav:
    fontFamily: dbHeaventFont, "dbHeaventFont Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3.56px
  sm: 4.44px
  md: 6px
  lg: 7.11px
  xl: 8.89px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 2.67px
  s3: 3.56px
  s4: 4.44px
  s5: 5.33px
  s6: 7.11px
  s7: 8.89px
  s8: 10.67px
  s9: 14.22px
  s10: 16.89px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 39px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 1)
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview
The measured page is https://www.honda.co.th/en, titled "Honda Thailand - บริษัท ฮอนด้า ออโตโมบิล (ประเทศไทย) จำกัด", the English-language home page of Honda Automobile (Thailand) Co., Ltd. It is a car-maker showroom: a slim white top bar with the Honda "H" mark at left, a text menu (Models, Technologies, Promotions, Service & Maintenance, Dealers, Blog), an EN / TH language switch and a red hamburger icon at the right. Beneath it a rounded full-bleed hero carousel shows the New Honda City and City Hatchback in a photographic, stylised campaign scene with the headline "New Honda City" and the line "Starting from 599,000 THB" and an outlined "DISCOVER MORE" button.

The second section, "Explore Your Dream Honda", is a model selector: category tabs (e:HEV, BEV, Sedan, Hatchback, SUV, MUV, All Models) above a row of car cut-outs (City, City Hatchback, Civic e:HEV, HR-V e:HEV, CR-V e:HEV), followed by a large grey panel for the selected model with "TEST DRIVE" and "DISCOVER MORE" buttons, colour swatches and the paint name. Later blocks, such as "e:HEV Experiences", use a pale grey card with portrait video thumbnails and short bilingual copy. The tone is product-first and spare; the page lets photography and the car silhouettes do the work, and uses red sparingly.

## Colors
- **Canvas** `#ffffff`: the top bar and navigation (nav role background).
- **Page background** `#f0f0f0`: the largest background by area (4963), used behind sections and cards; in the tokens it is `page-largest`.
- **Ink** `#303030`: the heading colour (the "Explore Your Dream Honda" heading) and second most read text colour (1055 characters). White text (1189 characters) sits on photographs and on the footer.
- **Muted text** `#7d7d7d` (1025 characters), used for body paragraphs, with `#c0c0c0` for inactive tabs and `#000000` for navigation links (407).
- **Primary red** `#cc0100`: the fill of the "GET DEAL!" button (white text), the active "e:HEV" tab colour, and the colour that menu links turn on hover (measured rgb(204, 1, 0) on "Models"). A darker red `#a70100` appears as a background (23).
- **Footer slate** `#373f4e`, a blue-grey used for the whole footer block (747).

The root variables expose a Mantine palette (for example `--mantine-color-red-9: #c92a2a`), but those are framework defaults and not the brand reds measured on rendered elements.

## Typography
A single family, dbHeaventFont, is loaded in weights 300, 400, 500, 600 and 700 with a "dbHeaventFont Fallback" companion, and sets all 3756 measured characters. Weight 400 dominates (3462), with 300 (230) and 700 (64). Sizes are fractional because they are scaled from a root size: 16px (1407 chars), 17.7778px (969), 21.3333px (486), 42.6667px (295), 26.6667px (294), 19.5556px, 14.2222px and 32px.

- **display**: 42.6667px / 400, line-height 51.5556px (hero and section headings, "New Honda City", "Explore Your Dream Honda").
- **display-mobile**: 33.28px / 400, line-height 33.28px.
- **body**: 17.7778px / 400, line-height 19.5556px (paragraphs and the button label).
- **nav**: 16px / 400, line-height 24px (menu links and the "Test Drive" link).

Headings are sentence case with no letter spacing; buttons use upper case copy ("GET DEAL!", "DISCOVER MORE", "TEST DRIVE"). dbHeaventFont is a Thai-capable family loaded from the site. No substitute font was measured.

## Layout
Desktop pass: 1280px wide, 7156px tall. Sections are stacked full-width rounded containers inset slightly from the viewport edges, so the hero carousel and grey panels read as large cards. The model selector is a horizontally scrolling row of five visible models with arrow controls at each end. The nav role is 71px tall on a white band. The footer is a 604px-tall slate block listing Models (City, City Hatchback, Civic e:HEV, Super-ONE, e:N2 and others) in columns. Spacing steps in the tokens are 1.78, 2.67, 3.56, 4.44, 5.33, 7.11, 8.89, 10.67, 14.22 and 16.89px, consistent with the fractional font scale.

## Elevation & Depth
No box shadows were measured (the shadow list is empty). Depth comes from photography, soft grey gradients inside the model panel, and the contrast between the white top bar, the `#f0f0f0` card sections and the dark footer. Car images carry their own floor reflection in the capture; there is no CSS elevation system.

## Shapes
Measured radii: 8.88889px (20 elements), 9999px (14, the pill-shaped and circular controls such as arrows and colour swatches), 4.44444px (10), 3.55556px (10), 6px (7) and left-only rounded corners of 7.11111px and 8.88889px (the edge of joined controls). The primary "GET DEAL!" button itself computes a 0px radius, as do the nav links, link and footer, so the tokens give them `rounded.none`. Large photo cards and the hero are visibly rounded in the capture.

## Components
- **button-primary**: `#cc0100` fill, white 17.7778px dbHeaventFont text ("GET DEAL!"), 0px radius, 39px tall.
- **outlined buttons**: "DISCOVER MORE" and "TEST DRIVE" appear as thin dark-outlined rectangles on photographs and grey panels (measured hover for plain nav links is the red `#cc0100`).
- **nav / nav-link**: white background, black 16px text, red on hover.
- **link**: black, 16px, 24px line height ("Test Drive").
- **model tabs**: grey text with the selected tab in red.
- **colour swatches**: small round chips above the model name.
- **footer**: `#373f4e` background with white text.

## Design System Architecture
No public design system or brand guideline was found for this site. The shipped CSS includes 233 root variables from Mantine (names like `--mantine-color-dark-9: #141414`, `--mantine-shadow-xs`), so the page is built on the Mantine React component library with its default palette present, while the visible brand colours (red `#cc0100`, slate `#373f4e`, greys) are applied through the site's own classes. The font is self-hosted as "dbHeaventFont" with a fallback face. Beyond that no named token scheme is exposed.

## Do's and Don'ts
- Do use red `#cc0100` for the one primary action per view and for active states.
- Do set all text in dbHeaventFont, regular weight, with 42.6667px headings.
- Do let photography fill rounded, near-full-width containers with white or `#f0f0f0` surroundings.
- Do keep the footer in `#373f4e` with white text.
- Don't round the primary red button; it measures 0px.
- Don't use Mantine's default palette colours (for example `#c92a2a`) as brand colours.
- Don't add shadows; none were measured.

## Responsive Behavior
At 390px the mobile pass recorded: h1 and h2 at 33.28px, body and button text at 18.72px, the "GET DEAL!" button 130px wide by 40px tall in `#cc0100`, and a 58px-tall white top bar showing the EN / TH switch at 20.8px. The most frequent font sizes become 18.72px, 20.8px and 22.88px. Navigation layout, column collapse and carousel behaviour on mobile were not measured beyond these values.

## Iteration Guide
1. Start with a white top bar and `#f0f0f0` sections inside rounded containers.
2. Set all type in dbHeaventFont: 42.6667px headings in `#303030`, 17.7778px body in `#7d7d7d`.
3. Use one red `#cc0100` square button per view, with uppercase copy.
4. Use thin outlined buttons over photographs.
5. Close with a `#373f4e` footer containing the model list in white.

Further notes for rebuilding: the page alternates three surface treatments, namely the white top bar, the pale grey `#f0f0f0` content cards and the dark photographic hero, and each is separated by generous empty space rather than rules. Copy is bilingual in places (English headings with Thai paragraph text under the e:HEV video card), so the type scale has to hold both scripts at the same 17.7778px body size. Campaign slogans such as "QUAKE 'EM UP!" are baked into hero artwork and are not live text, so do not reproduce them as styled headings.
