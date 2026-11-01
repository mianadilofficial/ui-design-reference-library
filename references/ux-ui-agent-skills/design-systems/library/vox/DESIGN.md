---
version: alpha
name: Vox
category: "News & Publishing"
description: "Vox is an explanatory news site built on a white #ffffff page with #131313 text, a loud #fff200 yellow masthead and Sign Up button, balto sans headlines, harriet serif deck copy at 14px, Roboto Mono 12px kickers, and near-square 1px to 2px corners."
colors:
  canvas: "#ffffff"
  ink: "#131313"
  primary: "#fff200"
  on-primary: "#131313"
  surface-muted: "#f5f5f5"
  ink-muted: "#4a4a4a"
  ink-subtle: "#636363"
  button-secondary-border: "#e9e9e9"
typography:
  display:
    fontFamily: balto, "balto Fallback", Arial, sans-serif, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  display-mobile:
    fontFamily: balto, "balto Fallback", Arial, sans-serif, Arial, sans-serif
    fontSize: 27px
    fontWeight: 700
    lineHeight: 27px
  heading:
    fontFamily: "\"Roboto Mono\", \"Roboto Mono Fallback\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
  body:
    fontFamily: harriet, "harriet Fallback", Georgia, serif, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.14px"
  button:
    fontFamily: balto, "balto Fallback", Arial, sans-serif, Arial, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 15.6px
    letterSpacing: 0.13px
  link:
    fontFamily: "\"Roboto Mono\", \"Roboto Mono Fallback\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    letterSpacing: "-0.12px"
rounded:
  xs: 1px
  sm: 2px
  md: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 40px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 20px 0px
    height: 70px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 14px 0px 14px 14px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 8px 0px 8px 12px
    height: 40px
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is the Vox home page, https://www.vox.com/. The site's own meta description calls Vox "a general interest news site for the 21st century" whose mission is "to help everyone understand our complicated world". The page is 12,836px tall at a 1280px viewport, which makes it a long, dense editorial front page rather than a landing page.

From the top, the capture shows a yellow masthead band with a very large italic serif "Vox" wordmark at left and a row of section links with thin vertical rules (Explainers, Politics, Culture, Advice, Listen, Watch), a "Sign In" link, a "Become a Member" label and a round black menu button. Under it sits a mono-type topic strip ("Making sense of it all:" followed by The Trump administration, Artificial intelligence, Iran war, Climate), then a three-column lead: a numbered "Start Here" list in a bordered box, a centered feature with a large photo, a headline ("Is this the cure for Alzheimer's?") and a serif deck, and a right rail of small thumbnail stories. Below come a dotted-rule newsletter strip and rows of five-card carousels titled "Recommended For You", "Even Better" and "Future Perfect".

Art direction is illustration-heavy and photographic at once, and the one saturated element is the yellow masthead. The rest is black on white with thin rules.

## Colors

The canvas is `#ffffff` (10,843 weighted area units). The text color is `#131313`, the most-read ink (6,954 characters), followed by `#4a4a4a` (1,995, used for deck paragraphs) and `#636363` (98). `#f5f5f5` is a light panel background (904 units), and `#e9e9e9` is the measured light border color used on the secondary button.

The single brand color is the yellow `#fff200`: it fills the primary "Sign Up" button (measured as the primary CTA, 40px tall) and measures 648 area units, which matches the yellow masthead in the capture. A translucent `#fff200d9` also appears. The button text on it is `#131313`. Other measured fills (`#f6f6f6`, `#000000`, `#6aaae4`) are tiny areas and are not tokenized. The shipped CSS corpus holds many video-player and comment-widget colors (for example `#1b7fcccc` and `#3ea6ff`) that belong to embedded players and are not brand colors here.

## Typography

Three families do distinct jobs. `balto`, a bold geometric sans, sets headlines, navigation and buttons. `harriet`, a serif, sets deck and body paragraphs. `Roboto Mono` sets kickers, section labels and link strips. The root variables define `--font-balto`, `--font-harriet` and `--font-roboto-mono` with fallbacks Arial, Georgia and the Roboto Mono Fallback.

Measured roles: navigation and the h1 candidate use balto at 16px/19.2px, weight 400. Body deck copy is harriet 14px/16.8px weight 400 with −0.14px letter spacing. The "Making sense of it all:" label is Roboto Mono 12px, weight 700, 14.4px line height. Links in the topic strip are Roboto Mono 12px weight 400 with −0.12px tracking. Buttons are balto 13px at weight 700 with 0.13px tracking. In the mobile pass the headline "Is this the cure for Alzheimer's?" is balto 27px at weight 700 on a 27px line height. Sizes seen across the desktop page by characters include 16px, 11px (with 1.1px tracking, the uppercase kickers), 22px, 17px, 18px, 14px, 20px and 38px. The 38px size is measured but its font and weight were not isolated, so it is not tokenized.

Font substitutes: balto and harriet are licensed faces; use a bold grotesque for headlines and a transitional serif for decks, and keep Roboto Mono as is.

## Layout

The grid is a wide editorial container. The measured gaps are 16px, 8px, 10px, 60px, 40px, 14px, 25px and 24px; measured paddings are 20px, 15px, 16px, 30px, 14px, 6px, 40px and 35px. The masthead links have 14px vertical and left padding in 46px tall cells with a vertical rule at the left edge of each. Card rows show five equal columns separated by thin vertical rules, and each section begins with a heavy horizontal rule and a bold heading. The lead block is three columns: a narrow list, a wide hero, a narrow rail. A dotted horizontal rule separates the lead from the newsletter strip. The footer is a 582px block with link groups ("About us", "Our staff", "Ethics & Guidelines").

## Elevation & Depth

Depth is nearly absent. The measured shadows are mostly zero-alpha inset lines (`rgba(0, 0, 0, 0) 0px -1px 0px 0px inset`, 80 uses) used as underline slots, `rgb(0, 0, 0) 0px -1px 0px 0px inset` (9) as a visible underline, and two soft drop shadows: `rgba(0, 0, 0, 0.2) 0px 2px 2px 0px` (7) and `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2). Separation otherwise comes from rules and white space.

## Shapes

Corners are nearly square. Measured radii: 50% (17 elements: numbered circles in the "Start Here" list and the round menu button), 1px (2, the Sign Up button), 2px (2, text input) and 100px (2). Tokens: `xs` 1px, `sm` 2px, `md` 100px, `pill` 9999px. Photos in the carousels are square-cornered.

## Components

**Sign Up button:** yellow `#fff200` fill, `#131313` text, balto 13px bold with 0.13px tracking, 1px radius, `0px 20px` padding, 40px tall.

**Crossword link:** "Play today's crossword", balto 16px, 20px vertical padding, 70px tall, 1px `#e9e9e9` border and an arrow; a pixel-crossword icon sits at its left in the capture.

**Search input:** 40px tall, 2px radius, 1px `#131313` border, `8px 0px 8px 12px` padding.

**Nav link:** balto 16px with 14px padding and a left rule. "Listen" and "Watch" are bold with small icons in the capture.

**"Become a Member" label:** measured on hover, it changes from a white fill with `#131313` text and a 2px radius to a `#000000` fill with white text and a white border.

**Story card:** a thumbnail, a mono kicker in uppercase, a bold balto headline and a mono byline ("By CAMERON PETERS").

A cookie-settings button and an ad slot appear in the capture; they are not brand UI and are not tokenized.

## Design System Architecture

No public Vox design system or brand guideline was found: the home page HTML links neither, and https://www.vox.com/brand returned HTTP 404. The de-facto system is visible in the shipped markup: component classes carry a `duet--` prefix (for example `duet--app` and `duet--cta--button`) alongside hashed utility classes, fonts are exposed as `--font-balto`, `--font-harriet` and `--font-roboto-mono`, and the comments widget has its own `--coral-*` custom properties. Tokens in this file come from live measurement of https://www.vox.com/.

## Do's and Don'ts

- Do keep the page white and let `#fff200` appear only in the masthead and the Sign Up action.
- Do pair a bold sans headline with a serif deck and a mono kicker.
- Do separate sections with hairline or heavy horizontal rules rather than shadows.
- Do keep corners at 1px to 2px, with circles only for numbered markers and the menu.
- Don't use `#0000ee` or any default link blue.
- Don't tokenize the player or comment-widget colors found in the CSS corpus.
- Don't document the cookie control or ad slot as brand UI.

## Responsive Behavior

The mobile pass recorded: the headline at 27px/27px, weight 700 (`display-mobile`); the mono h2 and the harriet body unchanged at 12px and 14px (body line height 16.8px; the deck box is 84px tall versus 101px on desktop); and the Sign Up button unchanged at 40px tall with 1px radius and 20px side padding. The mobile navigation element measured was a pagination block ("PAGE 1 OF 15 / NEXT") with 16px vertical padding and a 1px `#e9e9e9` border. The HTML declares media queries at `max-width: 768px` and `max-width: 1180px`; other layout changes are not measured.

## Iteration Guide

1. Start with white, `#131313`, and the yellow `#fff200` for one action color.
2. Set kickers in Roboto Mono and decks in the serif; headlines are the bold sans.
3. Use rules and white space for hierarchy; keep shadows to the two measured values when a lift is needed.
4. Keep buttons 40px tall with square 1px corners.
5. Re-measure the headline at 38px on desktop before adding a desktop headline token.
