---
version: alpha
name: "Yale University"
category: "Education"
description: "Yale University: flagship university site in Yale blue #00356b on white with charcoal #222222 footer, yale serif headings at 36px, Mallory sans body at 20px, 14px uppercase tracked buttons, interactive blue #286dc0 and square 0px corners throughout."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00356b"
  on-primary: "#ffffff"
  surface: "#222222"
  ink-5: "#286dc0"
  ink-6: "#4a4a4a"
  hairline: "#dddddd"
  on-primary-hover: "#63aaff"
typography:
  display:
    fontFamily: yale, TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
  subheading:
    fontFamily: Mallory-Medium, "Gill Sans", "Gill Sans MT", Calibri, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
    letterSpacing: 0.75px
    textTransform: uppercase
  body:
    fontFamily: Mallory, "Gill Sans", "Gill Sans MT", Calibri, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.1px"
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 12px
  s3: 15px
  s4: 16px
  s5: 18px
  s6: 20px
  s7: 23px
  s8: 30px
  s9: 40px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 40px 0px 20px
    height: 50px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 40px 0px 20px
    height: 70px
  link:
    textColor: "{colors.surface}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 16px 20px
    boxShadow: rgb(221, 221, 221) 0px 0px 0px 1px inset
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px 0px 10px
---

# Yale University

## Overview

The Yale University home page (https://www.yale.edu/, title "Yale University") is the flagship site of the university, and the measured page announces that it is being redesigned: a feature block titled "Reimagining Yale.edu" (label "SHARE YOUR THOUGHTS") says "We are redesigning Yale's flagship site, and we want to hear from you", with a "TAKE THE SURVEY" button. The measured page is 4770px tall at 1280px width and reads as a traditional editorial university site: a white header with the large serif "Yale" wordmark in Yale blue at the left; a small uppercase utility row in a lighter blue (CALENDARS, GIVE, NEWS, DIRECTORIES) beside a white outlined "SEARCH" button and a navy "INFO FOR..." dropdown with a grey "GO" button; and a main menu in serif navy (About Yale, Academics, Admissions, Research, Collections, Life at Yale). The hero is an overlapping composition: a large photographic panel (a portrait on a deep blue dotted background) at the right and a pale grey text card at the left overlapping it, with a small uppercase label ("BEYOND BLUE PODCAST"), a serif heading "Finding common ground on firearm safety", a paragraph in the sans-serif Mallory and a bordered "LISTEN TO & FOLLOW BEYOND BLUE" button. A grey tab "THE FEATURE ARCHIVE" sits at the lower right of the image. "The latest from Yale News" follows, with a lead story and a list of dated headlines, a filter select "ALL NEWS" and a "GO" button. The footer is a dark charcoal band.

## Colors

`primary` #00356b is Yale blue, the fill of the primary button, the wordmark, headings (179 text characters) and main-menu text, and covers 1943 units of background area. `surface` #222222 is the largest background (weight 4143, the footer) and also the colour of link and heading text (112 characters). `canvas` #ffffff is the page and header background; #f9f9f9 (weight 534) is the pale grey of the text cards and hover fills. `ink` is #000000 (705 characters, news headlines and body), and white is the most-read colour (2123 characters, on the navy and charcoal). `ink-5` #286dc0 (94 characters; 86 units of background) is the lighter interactive blue: it colours the utility links, the secondary button text and is the fill on hover of the feature archive tab and the news buttons. `ink-6` #4a4a4a (78 characters) is the fill of the grey "GO" button; `hairline` #dddddd (85 units of background; the only border colour) draws 1px outlines; `on-primary-hover` #63aaff is the text colour of the "INFO FOR..." button on hover. Further measured greys in the footer are #978d85 (51 characters) and #7e736b (17 characters, also the "THE FEATURE ARCHIVE" tab fill). #0000ee measured on 15 characters is the browser default link colour and is not used as a brand colour.

## Typography

Three families plus an icon font. `yale` is the serif display face (986 characters), with a fallback stack of TimesNewRoman, Times New Roman, Times, Baskerville and Georgia; `display` is 36px, weight 400, line-height 40px. Mallory is the sans-serif text face (1870 characters), and `body` is Mallory 20px, weight 400, line-height 32px, letter-spacing -0.1px. Mallory-Medium (458 characters) sets the uppercase button and label style: `subheading` is 14px, weight 400, line-height 17px, letter-spacing 0.75px, uppercase. YaleDesign (62 characters) is an icon font and FontAwesome is loaded for further icons; neither is a text voice. Other measured sizes: 13.6px (1085 characters, the footer legal text), 30px (235), 22px (60), 50px (60), 40px (54), 36px (59), 16px, 21px, 32px, 33px and 24px. Letter-spacing is wide on small uppercase labels (14px with 0.75px, 0.5px or 0.55px) and moderate on 20px text (0.5px and 0.54px for 449 characters in total). Weights: 400 (3369 characters) and 700 (59).

## Layout

The page uses an asymmetric, overlapping editorial layout: a text card sits over the edge of a full-height image panel, and the same device repeats lower on the page with the redesign survey card and a laptop photograph. News is a two-column block: a lead story with image and title on the left and a ruled list of dated headlines on the right. Measured paddings: 20px (14 occurrences), 12px (14), 16px (9), 18px (7), 8px (7), 23px (6), 80px (3), 90px, 40px, 30px and 15px (1 each). Spacing tokens: 8px, 12px, 15px, 16px, 18px, 20px, 23px, 30px, 40px and 80px. Button padding is 0px 40px 0px 20px with a 50px or 70px height; the outlined link button uses 15px 18px or 16px 20px.

## Elevation & Depth

Flat and rule-based. Every measured shadow is either fully transparent or an inset 1px hairline: rgb(221, 221, 221) 0px 0px 0px 1px inset (2 elements, the outlined button border), rgba(255, 255, 255, 0.17) 0px 0px 0px 1px inset, and a pair of rgb(249, 249, 249) horizontal offset fills (-108px and -80px) that paint the grey panel under overlapping cards. Depth comes from the card-over-image overlap and from solid blue and charcoal bands.

## Shapes

Square. No border radius was measured on any element (borderRadii is empty), so every rendered element computes 0px; `rounded.none` is the only radius. Buttons, cards, inputs and image panels are rectangular. The dotted blue pattern in the hero photograph is part of the artwork.

## Components

- Primary button (`button-primary`): Yale blue #00356b fill, white label, Mallory-Medium 14px uppercase with 0.75px tracking, padding 0px 40px 0px 20px, 50px high, 0px radius ("INFO FOR..."). On hover the label turns #63aaff.
- Secondary button (`button-secondary`): white fill, #286dc0 label, same type, 70px high ("EXPLORE BY TOPIC").
- Outlined link button (`link`): #222222 label, 1px #dddddd inset border, padding 16px 20px, with a small triangle glyph; on hover the fill becomes #286dc0 with a white label.
- Search: white with navy text and a #dddddd border; hover fill #f9f9f9.
- Main menu: serif navy labels that turn #286dc0 on a white fill on hover.
- News headline: black serif text that turns #286dc0 on hover; a small date in italic grey beneath each headline.
- Footer (`footer`): #222222 band, white text, padding 20px 0px 10px, legal text at 13.6px.

## Design System Architecture

No public design-system documentation was opened for this report, and the measured page declares no root CSS variables. The design language is expressed in element styles and in shipped fonts: the custom serif `yale`, the sans-serif Mallory family and the YaleDesign icon font. The de-facto system is Yale blue on white with a lighter interactive blue, charcoal for the footer, square-cornered buttons and serif headings. Source: https://www.yale.edu/ and web/data/extracted/yale-university.json. No official design-system link was found on the measured page.

## Do's and Don'ts

- Do set headings in the yale serif at 36px in Yale blue #00356b, and body in Mallory 20px with 32px line-height.
- Do set buttons and labels in 14px uppercase Mallory-Medium with 0.75px tracking.
- Do use square corners everywhere; no radius was measured.
- Do overlap a pale #f9f9f9 text card over a large photograph for features.
- Do use #286dc0 as the hover and interactive highlight.
- Don't use the browser default link blue #0000ee.
- Don't add shadows beyond 1px inset hairlines.
- Don't use bold except for emphasis; weight 700 appears in only 59 characters.

## Responsive Behavior

The 390px mobile pass recorded the feature heading at 36px (the h1 role, "Finding common ground on firearm safety") and the footer legal paragraph at 13.6px; mobile sizes by characters were 13.6px (1085), 14px (387), 20px (325), 18px (157), 21.07px (137), 36px (59), 30px (39), 24px (37), 12px, 25px and 16px. The mobile layout summary is not recorded. Menu collapse, card stacking and image crops on narrow screens were not measured.

## Iteration Guide

1. White canvas, Yale blue #00356b wordmark and headings in the yale serif.
2. A utility row of small uppercase #286dc0 links, a search button and a navy "INFO FOR..." button.
3. A main menu of serif navy labels with a #286dc0 hover.
4. Feature blocks: photo panel with an overlapping #f9f9f9 card, a small uppercase label, a 36px serif heading, a Mallory paragraph and an outlined button.
5. News: a lead story plus a ruled list with dates; footer in #222222.
6. Run `node web/scripts/verify-designs.mjs --slug=yale-university` after edits.
7. Voice: institutional but warm; headlines are sentence-case statements or questions, labels are small uppercase, and calls to action are descriptive ("Listen to & Follow Beyond Blue", "Take the Survey").
