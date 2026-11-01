---
version: alpha
name: Six Senses
category: "Travel & Hospitality"
description: "Six Senses (sixsenses.com): a calm wellness-resort site in plum and parchment. Canto Roman 400 serif headlines at 50.4px with negative tracking, Avenir Next 14px/22.4px grey #666666 body, Avenir Next Condensed 500 uppercase labels, a #4d1443 plum 46px-radius Search pill, white pages and #f8f8f2 bands."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f2"
  ink: "#666666"
  primary: "#4d1443"
  on-primary: "#ffffff"
  ink-heading: "#000000"
  plum-text: "#673065"
  hairline: "#4d14434d"
  button-primary-border: "#6e3063"
typography:
  display:
    fontFamily: "\"Canto Roman\""
    fontSize: 50.4px
    fontWeight: 400
    lineHeight: 55.44px
    letterSpacing: "-1.008px"
  display-mobile:
    fontFamily: "\"Canto Roman\""
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46.2px
    letterSpacing: "-0.84px"
  heading:
    fontFamily: "\"Canto Roman\""
    fontSize: 36.4px
    fontWeight: 400
    lineHeight: 43.68px
    letterSpacing: "-0.728px"
  subheading:
    fontFamily: "\"Canto Roman\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: "-0.64px"
  body:
    fontFamily: "\"Avenir Next\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "\"Avenir Next Condensed\""
    fontSize: 13.16px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: 0.658px
    textTransform: uppercase
rounded:
  xs: 10px
  sm: 40px
  md: 46px
  lg: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 19.2px
  s6: 20px
  s7: 24px
  s8: 25px
  s9: 30px
  s10: 34px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 55px 0px 30px
    height: 46px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 50px 0px 20px
    height: 50px
    borderColor: "{colors.canvas}"
  button-book:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.plum-text}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 50px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 20px 0px 0px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 0px 25px
    height: 16px
---

# Six Senses

## Overview

Six Senses is a wellness-led resort brand, and its home page at sixsenses.com/en/ (title "Luxury Resorts, Five Star Hotels & Wellness Spas | Six Senses") reads like a slow travel journal. The measured page is 1280px wide and 5995px tall. It opens with a full-bleed hero film of a smoke-wreathed ritual performer, a centred Six Senses logo (three dots above the wordmark), a hamburger icon and language select at the top left, and two pills at the top right: an outlined "LOGIN" and a white "BOOK NOW". The headline, set in a soft serif, reads "Some places you visit. Others, you feel, by reconnecting with yourself, others, and the world around you." A floating white booking bar sits on the hero's bottom edge with a plum "SEARCH" pill.

Below the hero the page alternates white and parchment (`#f8f8f2`) sections: "In the spotlight: featured properties" (a large photo carousel, Six Senses London first), "Everything we do, in tune with you" (wellness, with an accordion list), "For soul seekers and mindful explorers" (a wide photo slider with three short value columns), "On the horizon: featured new openings", "What's on at Six Senses?" and a newsletter block with a hand-drawn line illustration of a bird over a village.

The mood is earthy and quiet: warm photography of skin, clay, stone, palms and mountains; generous whitespace; grey body copy; and a single deep plum used for actions and small uppercase link labels such as "WHERE NEXT: VIEW ALL HOTELS AND RESORTS ›".

## Colors

- **canvas `#ffffff`** — the body background and the white booking bar, the white "BOOK NOW" pill and white section bands.
- **page-largest `#f8f8f2`** — the largest painted background: the warm parchment bands behind the wellness section, "On the horizon" and the newsletter.
- **ink `#666666`** — the most-read text colour (4841 characters): every Avenir Next paragraph.
- **ink-heading `#000000`** — the Canto Roman section headings and property names (926 characters); black is also measured as a large background area behind the hero film.
- **primary `#4d1443`** — the deep plum fill of the "SEARCH" pill, the brand's main action.
- **on-primary `#ffffff`** — white label on the plum pill.
- **plum-text `#673065`** — the second plum, measured as text (718 characters) on small uppercase link labels and as the "BOOK NOW" label. On hover "BOOK NOW" turns into a `rgb(103, 48, 101)` (`#673065`) fill with white text.
- **button-primary-border `#6e3063`** — the 1px border of the Search pill; the hover probe recorded the Search pill's resting fill as `rgb(110, 48, 99)` (`#6e3063`) at that moment.
- **hairline `#4d14434d`** — a 30% plum line, the most frequent border colour (8 elements): the dividers under the wellness accordion items and value columns.

Other measured borders are `#ffffff`, `#e6e6e6` and `#ffffff4d`. The palette has no bright accent; colour beyond plum comes only from photographs.

## Typography

Three self-hosted faces are loaded: Canto Roman (`/fonts/Canto-Roman.woff2`), Avenir Next Regular and Avenir Next Condensed Medium.

- **Display — Canto Roman 400, 50.4px / 55.44px, -1.008px tracking.** The hero headline, white over the film, sentence case, left-aligned in a 590px measure.
- **Heading — Canto Roman 400, 36.4px / 43.68px, -0.728px tracking.** Centred section headings: "In the spotlight: featured properties", "On the horizon: featured new openings".
- **Subheading — Canto Roman 400, 32px / 38.4px, -0.64px tracking.** Property names such as "Six Senses London". Further Canto sizes measured are 28px (-0.56px) and 21px (-0.42px), always with tracking of -2% of the size.
- **Body — Avenir Next 400, 14px / 22.4px.** All paragraphs, in `#666666`. Avenir Next is the most-read family (4977 characters); 16px is the second most common size (885 characters).
- **Button / label — Avenir Next Condensed 500, 13.16px, 0.658px tracking, uppercase.** Buttons use a 46px line height; inline links like "VIEW PROPERTIES ON MAP" use 15.792px. A 15.04px size with 0.752px tracking is measured too (255 characters), for small overline labels such as "UNITED KINGDOM" and "WELLNESS & SPA".

Headlines are always sentence case and never bold; uppercase is reserved for condensed labels. **Substitutes:** Canto Roman → a light humanist serif such as Cormorant or Libre Caslon at regular weight; Avenir Next → Nunito Sans or Montserrat at 400; Avenir Next Condensed → Barlow Semi Condensed 500.

## Layout

The page is a stack of full-width bands with content in a centred container. Section headings are centred, followed by a small uppercase plum link, then the content row. The featured-properties carousel shows one large landscape photo with the next slide peeking at the right edge and circular arrow buttons at both sides (100% radius, 8 elements measured). Under each photo the country label, Canto property name and a short paragraph sit in two columns. The wellness section is a two-column split: a tall photograph on the left, heading, paragraph and an accordion list ("COME ON IN", "PERSONALISED WELLNESS", "RETREATS") on the right. "On the horizon" and "What's on" use three-column card rows; the widest measured row has 7 card columns.

Measured gaps are 20px, 24px, 50px and 8px; the most frequent paddings are 19.2px, 15px, 20px and 38.4px, with 30px, 34px, 50px and 75px for larger blocks. The booking bar is a single 46px-tall white row with icons for destination, dates (Check-in → Check-out), guests ("2 Adults, 0 Children") and special codes.

## Elevation & Depth

Depth is minimal. The one rendered shadow is `rgba(0, 0, 0, 0.2) 0px 0px 10px 0px`, a soft even glow, on the floating booking bar where it overlaps the hero. Everything else is flat: cards have no borders or shadows and photographs sit directly on the background. The stylesheet also contains shadows such as `1px 3px 10px rgba(0,0,0,.1)` and `0 4px 4px rgba(0, 0, 0, .25)` that were not seen on rendered home-page elements. A translucent black (`#00000026`) is measured as a small background area.

## Shapes

Shapes are round and soft. Actions are full pills: the Search button at 46px radius, LOGIN and BOOK NOW at 50px, and 40px on another control. Arrow buttons are circles (100%). The language select uses 10px, and a 10px 0px 0px 10px radius is measured on one element. Photographs and cards are square-cornered. Icons are thin line drawings (lens, calendar, person), and the newsletter illustration is a hand-drawn black line sketch, and the lens icon file is named `Handmade=lens-white.svg`.

## Components

- **Search pill (primary)** — `#4d1443` fill, 1px `#6e3063` border, white Avenir Next Condensed 500 13.16px uppercase label, 46px tall, 46px radius, padding 0px 55px 0px 30px with a white lens icon at the right.
- **Login pill (secondary)** — transparent fill, 1px `#ffffff` border, white label, 50px tall, 50px radius, padding 0px 50px 0px 20px, with an IHG login icon image at the right.
- **Book Now pill** — `#ffffff` fill with `#673065` label, 50px tall, 50px radius; on hover the fill becomes `#673065` and the label white.
- **Text link** — uppercase condensed label with a small chevron, white over imagery ("VIEW PROPERTIES ON MAP") or plum on light backgrounds ("STILL THE CITY, STIR YOUR SOUL ›", "DISCOVER MORE ›"), padding 0px 20px 0px 0px.
- **Language select** — white uppercase condensed text, 10px radius, chevron icon, 0px 0px 0px 25px padding.
- **Accordion list** — uppercase plum labels with a "+" at the right and `#4d14434d` hairlines between rows.
- **Property card** — photo, uppercase country overline, Canto Roman name, grey paragraph, plum "DISCOVER MORE ›" link.
- **Newsletter block** — "SIX SENSES NEWSLETTER" overline, Canto heading "Journey through Six Senses offers and updates", grey paragraph, "SUBSCRIBE NOW ›" link and a line illustration.

## Design System Architecture

No public Six Senses design system or brand guideline could be opened: https://www.sixsenses.com/en/media and https://www.sixsenses.com/en/about-us both returned HTTP 403 to the fetch tool. The site exposes no CSS custom properties at the root (0 root variables measured), so the de-facto system lives in compiled CSS: three self-hosted font files, plum fills and borders (`#4d1443`, `#6e3063`, `#673065`), and a pill-shaped button family whose icons are background images (`Handmade=lens-white.svg`, `IHG-login-white.png`, `Normal=Chevron Down.svg`). The icon file names use a `Property=Value` naming pattern. The stylesheet's breakpoints are 768px, 1024px, 1321px and 1801px (with matching max-widths 767px, 1023px, 1320px, 1800px). Graphik font files are also loaded, served from consent.trustarc.com and ihg.com, which are third-party sources and not part of the brand's own type system.

## Do's and Don'ts

**Do**
- Set headlines in Canto Roman 400, sentence case, with tracking of -2% of the size.
- Keep body copy small, grey (`#666666`) and in Avenir Next 14px/22.4px.
- Use plum `#4d1443` for the main action and `#673065` for small uppercase links.
- Make every action a pill (46px–50px radius) and every arrow a circle.
- Alternate white and `#f8f8f2` sections and let warm photography fill the width.
- Write slow, sensory, invitational copy ("Still the city, stir your soul").

**Don't**
- Don't bold the serif or set it in all caps.
- Don't introduce bright accent colours or gradients.
- Don't add card borders or heavy shadows; the only measured shadow is a 10px soft glow.
- Don't use square buttons.
- Don't present the IHG or consent-banner Graphik fonts as Six Senses brand type.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the hero headline at Canto Roman 42px / 46.2px with -0.84px tracking (350px wide); section headings at 27px / 32.4px with -0.54px tracking; body copy at Avenir Next 15px / 24px in `#666666`. Mobile font sizes measured include 15px, 16px, 14.1px, 15.04px, 27px, 22.5px, 19.5px, 24px and 42px, so headings scale down while body text grows by 1px. No primary CTA was detected in the mobile pass. On both desktop and mobile the layout probe recorded 0 visible header text links and a visible menu toggle. Breakpoints in the stylesheet are at 768px, 1024px, 1321px and 1801px. Carousel, booking-bar and card arrangement at mobile width was not measured.

## Iteration Guide

1. Start with a `#ffffff` page and alternate `#f8f8f2` bands; use edge-to-edge warm photography.
2. Set a sentence-case headline in Canto Roman 400 (50.4px/55.44px desktop, 42px/46.2px mobile) with negative tracking.
3. Use Canto Roman 36.4px for section headings and 32px for item names, in `#000000`.
4. Set paragraphs in Avenir Next 14px/22.4px `#666666`.
5. Set every label, link and button in Avenir Next Condensed 500 13.16px uppercase with 0.658px tracking.
6. Build actions as pills: plum `#4d1443` Search (46px), white Book Now with `#673065` text (50px), outlined Login (50px).
7. Divide list rows with a `#4d14434d` hairline and keep surfaces flat; reserve the 10px soft glow for floating bars.
