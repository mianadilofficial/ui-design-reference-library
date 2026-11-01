---
version: alpha
name: "Orangetheory Fitness"
category: "Sports & Fitness"
description: "Orangetheory's US site pairs a warm cream canvas (#f4eddf) and near-black ink (#0a0a0a) with an orange (#ff8633) that fills pill buttons (32px radius) and rounded 30px feature cards, set in PPRightGrotesk 700 at 60.8px with 300-weight 14px body."
colors:
  canvas: "#f4eddf"
  ink: "#0a0a0a"
  primary: "#ff8633"
  on-primary: "#0a0a0a"
  on-dark: "#ffffff"
  ink-pure: "#000000"
  primary-hover: "#d95e0b"
typography:
  display:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 60.8px
    fontWeight: 700
    lineHeight: 60.8px
    letterSpacing: 1px
  display-mobile:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
    letterSpacing: 0.1px
  heading:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 35.2px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-0.32px"
  body:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 23px
    letterSpacing: 0.1px
  button:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
  button-secondary:
    fontFamily: PPRightGrotesk, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
rounded:
  xs: 20px
  sm: 24px
  md: 30px
  lg: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 10px
  s6: 11.5px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 11.5px 36px
    height: 47px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 11.5px 36px
    height: 47px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-pure}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 55px 49px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    padding: 70px 0px
---

## Overview

Orangetheory Fitness (https://www.orangetheory.com/en-us) is a heart-rate-based group fitness franchise, and its US home page is built to convert a first visit into a free class. The page title is "Group Fitness Classes & Heart Rate-Based Interval Training". The h1 reads "8 days. Unlimited Classes. Just $39.+" with a supporting line "Get started with a free class." and a seasonal lead-in "Join us for Hell Week, our most fun week of the year." The sections that follow are "The workout that works out well.", "More personalized. Less pressure.", "The workout that works for people like you." (a row of dark testimonial cards) and "Start your fitness journey today." The voice is short, upbeat, second-person and numerate: it quotes concrete figures (8.6% body fat lost and 2.6% lean muscle gained from 18 classes in 8 weeks, with footnote marks; "1,500 studios worldwide") and closes the middle block with a money-back line ("Not your thing after 30 days? No sweat—we'll refund your money.").

The capture shows a very high-energy, photography-led layout: a rounded near-black hero panel with a woman lifting a dumbbell, a white studio finder card overlaid on it (search field, "Use current location", the closest studio with address and phone, then "Try A Class" in orange and "Join Now" in grey), followed by alternating orange text cards and rounded photographs of the studio's orange-lit rooms. Orange is both the brand colour and the room's lighting, so imagery and UI echo each other.

## Colors

The measured background areas are #f4eddf (weight 5343, the cream canvas), #0a0a0a (1383, hero and footer), #0000006b (756, a photo scrim) and #ff8633 (714, cards and buttons). Text colours by characters: #0a0a0a (3158), #ffffff (980), #000000 (38), #ff8633 (10).

- **Canvas #f4eddf**: page ground.
- **Ink #0a0a0a**: body copy and headings on cream and on orange; the site's variable `--nb-black` is #0a0a0a.
- **Primary #ff8633**: the Free Class button, the orange cards and the accent in the h1 ("Just $39."). The site's variable `--orange` is #ff8633.
- **Primary-hover #d95e0b**: measured on hover of the "Free Class*" button (background rgb(217, 94, 11)).
- **On-dark #ffffff**: text over the hero and footer.
- **Ink-pure #000000**: text of the nav role.

The CSS also contains `--color--primary` #f26922, `--color--text-dark` #2e2e2e, `--charcoal` #2e2e2e, `--color--light-gray` #f2f2f2, a violet #6e38d5 and a Swiper default #007aff in the variables. These did not appear as measured on-screen colours in the extraction and are not tokens. The orange the page renders is #ff8633, not #f26922. The 20% black scrim #0000006b sits on photographs and is not a brand colour.

## Typography

A single family, PPRightGrotesk, is loaded in weights 300, 400, 500 and 700, with Arial as the fallback. All 4186 measured characters are in it.

- **Display** 60.8px / 60.8px, weight 700, letter-spacing 1px: the h1 (the measured mobile value is 32px / 35.2px, letter-spacing 0.1px).
- **Heading** 35.2px / 38.4px, weight 700, letter-spacing -0.32px: card titles such as "The workout that works out well." (mobile 28px / 32px).
- **Body** 14px / 23px, weight 300, letter-spacing 0.1px: the most-used size (2039 characters) and weight (3009 characters at 300).
- **Button** 19.2px / 24px, weight 500, letter-spacing 0.1px (987 characters); **button-secondary** 24px / 24px, weight 500.

Other measured sizes include 26px (432 characters), 18px, 19px, 17.92px, 50px, 56px and 45.6px, used for studio-card and banner text; they are not individually tokenised. The scale is therefore heavy and tight at the top, light and airy in body.

## Layout

The page is 1280px wide and 4592px tall in the capture. The body role has a 151px-tall header region that contains a promotional strip and the nav row (logo, "The Workouts", "Locations", "Memberships", "Own A Studio", "Shop", a language globe and the "Free Class*" button). Content sits inside generous rounded panels with a gutter between them: the capture shows two-column splits (text card plus photo) that alternate left and right, and a three-up row of testimonial cards. Measured gaps: 32px (10 uses), 16px, 48px, 26px, 60px; measured paddings: 40px (12 uses), 20px, 60px, 55px 49px for orange cards, 70px 0px for the footer. The orange cards have a small notch cut-out where they meet the photograph, visible in the capture.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty) and no border colours were measured. Hierarchy comes from full-bleed colour blocks (cream, orange, near-black) and from the white studio finder card laid over the hero photo, plus a translucent #0000006b layer on imagery. Shadows are not part of the system.

## Shapes

Radii are large and friendly. Measured border radii: 30px (8 uses, the cards), 50% (3 uses, circular elements), 32px (2 uses, the buttons), 24px (2), 20px (1). Tokens: xs 20px, sm 24px, md 30px, lg 32px and pill 9999px. The primary button is 47px tall with a 32px radius, so it reads as a pill. Photographs share the card radius.

## Components

- **button-primary**: background #ff8633, text #0a0a0a, PPRightGrotesk 19.2px weight 500, padding 11.5px 36px, height 47px, radius 32px. Hover: background #d95e0b, text and border stay rgb(10, 10, 10).
- **button-secondary**: the same fill and padding at 24px text size. In the capture a second action, "Join Now", is a grey pill and the "Display All Nearby Locations" action is an orange pill; the grey fill was not extracted as a token.
- **card**: background #ff8633, text #0a0a0a, radius 30px, padding 55px 49px, 528px wide by 662px high for the first card; titles at 35.2px.
- **nav**: background #f4eddf, text #000000; nav links use the button type style in #0a0a0a.
- **link**: #0a0a0a, underlined inline links such as "Learn more about the workout." in the capture.
- **footer**: background #0a0a0a, text #ffffff, padding 70px 0px, height 490px; the page text lists Americas, Asia Pacific, Europe, Middle East region selectors and a copyright line "© 2011-2026 OTF Franchisor, LLC and its affiliations."

## Design System Architecture

No public design system or brand guideline is linked from the page. The page text and structured data link only to a logo file on the Webflow CDN (cdn.prod.website-files.com) and to award pages at newsweek.com, 10best.usatoday.com and global-franchise.com; the site's CSS variables follow Webflow's variable naming (`--fonts--font-weight-heading`, `--headings--h1-size-large-desktop` 3.75rem, `--headings--h1-size-tablet` 2.188rem, `--headings--h1-size-mobile` 1.625rem, `--widths--width-xlarge` 64rem, `--widths--width-xxlarge` 80rem). Several variables carry "deleted" suffixes, which shows an edited variable collection. The de-facto system is a token set of colours, heading sizes per breakpoint and container widths, with PPRightGrotesk as the one typeface. The extractor's own measured display size (60.8px) equals 3.75rem, the large-desktop h1 variable.

## Do's and Don'ts

- Do use cream #f4eddf as the page ground and #0a0a0a for text.
- Do use #ff8633 for the primary action and for large content cards, and #d95e0b for hover.
- Do round everything: 32px on buttons, 30px on cards.
- Do write in short numeric claims with footnote marks.
- Don't use shadows; none were measured.
- Don't use #f26922 or other variable-only oranges where the rendered brand orange is #ff8633.
- Don't set body copy above weight 300 at 14px; headlines carry the weight.
- Don't treat the promotional strip, the language selector or the photo scrim as brand components.

## Responsive Behavior

The 390px mobile pass recorded: h1 32px / 35.2px, weight 700, letter-spacing 0.1px (278px wide, 106px tall); h2 28px / 32px (250px wide); body 14px / 23px, weight 300. The site's variables also define per-breakpoint heading sizes (h1 3.75rem large desktop, 2.188rem tablet, 1.625rem mobile). How the nav, cards and testimonial row rearrange on mobile was not measured.

## Iteration Guide

1. Set canvas #f4eddf, ink #0a0a0a, primary #ff8633.
2. Build the hero as a near-black rounded panel with a white overlay card; use orange pill buttons.
3. Alternate orange text cards (radius 30px, padding 55px 49px) with photographs of the same radius.
4. Keep body at 14px weight 300 and headings at weight 700 with tight tracking (-0.32px at 35.2px).
5. Measure any new page with the extractor (`--slug=orangetheory--page --url=<url> --force --no-motion`) before adding tokens; dark/hover states beyond the button were not measured.
