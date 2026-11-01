---
version: alpha
name: LaCrapule Studio
category: "Portfolio"
description: "LaCrapule Studio (lacrapulestudio.com), a Paris CGI and film studio: full-bleed project photography under white uppercase type, 64px display in a custom bl face with -2.56px tracking, tiny 10.67px to 12.44px sa captions, outlined 3.56px-radius filter chips that invert to white, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  surface: "#1d1d1d"
typography:
  display:
    fontFamily: bl
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70.4px
    letterSpacing: "-2.56px"
    textTransform: uppercase
  display-mobile:
    fontFamily: bl
    fontSize: 52px
    fontWeight: 400
    lineHeight: 57.2px
    letterSpacing: "-2.08px"
    textTransform: uppercase
  body:
    fontFamily: sa
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 13.6889px
    letterSpacing: "-0.124444px"
    textTransform: uppercase
  nav:
    fontFamily: sa
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 11.7333px
    letterSpacing: "-0.106667px"
  link:
    fontFamily: jb
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 11.5556px
    textTransform: uppercase
rounded:
  xs: 3.56px
spacing:
  s1: 17.78px
  s2: 139.56px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  chip:
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    height: 27px
    borderColor: "{colors.primary}"
---

## Overview

lacrapulestudio.com is the site of LaCrapule Studio, titled "LaCrapule Studio — Image, CGI & Moving Things", and described in its own meta tags as "A Paris-based creative studio creating distinctive visual worlds through CGI, film and mixed media." The measured page is 1280px wide and 800px tall: a single full-viewport project showcase rather than a scrolling document. Behind everything is full-bleed project imagery; the capture shows an extreme close-up of an Audemars Piguet Royal Oak watch face rendered in monochrome CGI, with white type laid over it.

The interface is an overlay of tiny type. At top left is the two-line wordmark "LA CRAPULE — STUDIO"; at top center a local clock ("10:56 AM, FR"); at top right the links HOME, PROJECTS and ABOUT US, with HOME underlined as the active page. A large "©21-26" mark sits in the upper-right of the image. At lower left a small play-style control, the index "02" (the project counter runs 01 to 04) and a reverse control. The project title is set large in white uppercase ("AUDEMARS PIGUET" in the capture, "LACOSTE" in the measured DOM), with a bracketed subtitle beneath ("[ ROYAL OAK ]", "[ SPINOR SS26 CAMPAIGN ]"). A row of client chips along the bottom (Lacoste, Audemars Piguet, Coperni, Lancôme, MCM) switches projects, and a square "VIEW PROJECT" button with an arrow sits at the right.

The voice is clipped and editorial, in the manner of a fashion or luxury production credit: client names, bracketed campaign labels, a copyright range. There is no marketing prose on the entry view.

Art direction is hyper-real product CGI. The measured project names are luxury and fashion houses (Lacoste, Audemars Piguet, Coperni, Lancôme, MCM), and the entry view treats each one as a full-screen still or loop with almost no interface weight on top. Photographic framing is tight and macro (the hands, the date window and the AP logotype of the watch fill the screen), the grading in the capture is monochrome and the chip row and arrow controls are the project switchers visible on screen. Everything that is not the image is small, white and uppercase, so the interface reads as credits laid over a film frame.

## Colors

The page is not color-led: the imagery provides all color and the UI is white on top of it.

- **White #ffffff** is the UI color: all measured text on the entry view (173 characters), chip borders and chip hover fill. It is the `primary` token.
- **Black #000000** is `--text-color` in the root variables, and the text color on the inverted (hover) chip; **#ffffff** is `--bg-color`. The root variables describe a light default theme that the entry view does not use as its background.
- **#1d1d1d** is the largest background by area (1024), the dark ground behind the project media.

No accent, error or link colors were measured.

## Typography

Fonts are loaded under short custom family names rather than recognizable ones, so they are described by their file names only: **bl** (700), the display face; **sa** (300, 500, 600), the text face; **jb** (700), used for the "VIEW PROJECT" micro-label. The actual typefaces behind these names were not identified. In the capture, display lettering has a distinct soft, rough-edged outline.

- Display: bl at 64px on 70.4px line-height, uppercase, -2.56px letter-spacing (-0.04em). Mobile measured at 52px on 57.2px, -2.08px.
- Body / bracketed subtitles: sa at 12.4444px on 13.6889px, uppercase, -0.124444px.
- Nav: sa at 10.6667px on 11.7333px, -0.106667px; the nav container is weight 600, links weight 400.
- Link micro-label: jb at 8.88889px on 11.5556px, uppercase.
- Other measured sizes: 14.2222px (10 characters) and 32px (6 characters, the "©21-26" mark).

The fractional sizes (10.6667, 12.4444, 8.88889) are listed exactly as measured. Negative tracking of -1% applies to small text and -4% to display.

## Layout

The root variables define a 12-column grid: `--columns: 12`, `--gutter: 1.6rem`, `--margin: 2.6rem` and `--column: calc((100vw - 22.8rem)/var(--columns))`. The entry layout pins elements to the corners and edges of the viewport: wordmark top-left, clock top-center, nav top-right, project counter and title bottom-left, chip row bottom-center, view button right. Measured paddings are 17.7778px (5 elements, the chips) and 139.556px (1).

## Elevation & Depth

No box shadows were measured and there are no borders other than the 1px white outline on chips and the "VIEW PROJECT" box. Depth comes from the CGI imagery itself (brushed metal, specular highlights, shallow focus) and from the dark #1d1d1d ground.

## Shapes

One radius was measured: 3.55556px (7 elements), the client chips. The chips are small rounded rectangles with a thin white outline (dashed in the capture). The "VIEW PROJECT" box is a larger rounded square in the capture; its radius was not separately measured. All other elements compute 0px.

## Components

- **Client chip**: transparent, white label, 1px white outline, 3.56px radius, 27px tall, 17.78px padding. On hover (measured on Coperni, Lancôme and MCM) it inverts to a white fill with black text. The current project's chip is shown filled white in the capture.
- **Nav link**: 10.67px sa text in white, active page underlined.
- **View project**: arrow in an outlined square with a jb micro-label beneath.
- **Project title block**: bl display uppercase over the image with a bracketed sa subtitle.
- **Counter and controls**: tiny white-on-dark squares with play and reverse glyphs, and a two-digit index.

## Design System Architecture

No public design system or brand guideline was found. https://www.lacrapulestudio.com/ was opened (its meta description is quoted above); /about returned the home page and /about-us returned 200 with the title "LaCrapule Studio — About". The shipped CSS exposes only seven root variables (`--vh`, `--gutter`, `--margin`, `--bg-color`, `--text-color`, `--columns`, `--column`), so the de-facto system is a rem-based 12-column grid, three custom font families and a black/white color pair, with all other visual identity delivered by the project media.

## Do's and Don'ts

- Do let imagery fill the viewport and overlay white uppercase type on it.
- Do set display in bl with -4% tracking and captions in sa at about 10 to 12px.
- Do use outlined chips with a 3.56px radius that invert to white on hover.
- Do wrap project subtitles in square brackets.
- Don't add colored buttons, gradients or shadows.
- Don't put UI on a light panel: the entry view is imagery plus white type.
- Don't enlarge captions; the page depends on a very small text scale.
- Don't mix in a fourth typeface.

## Responsive Behavior

The 390px pass measured: display 52px/57.2px with -2.08px tracking, body 11.375px/12.5125px with -0.11375px tracking, and the header container at 39px weight 600 with 42.9px line-height (a mobile nav treatment whose children include white and black text). The most common mobile sizes are 11.375px (76 characters), 9.75px (34), 52px (21) and 39px (19). Layout reflow of the project row and chips was not measured.

## Page Anatomy

For reproduction, the entry view reads in this order from top to bottom: header row (wordmark, clock, three nav links), a large "©21-26" mark at the upper right, the project title and bracketed subtitle at the lower left with the counter and two control squares to their left, the "VIEW PROJECT" box at the right, and the chip row centered along the bottom edge. The nav is the only place where the root text color relationship matters: its links are white on the media, with the active link underlined.

## Iteration Guide

1. Overlay white uppercase type on full-bleed media; use the tokens in the frontmatter for every size.
2. Add chips with the 3.56px radius, 27px height and white outline.
3. Keep copy terse: client name, bracketed subtitle, year range.
4. Verify any new value in `web/data/extracted/lacrapule-studio.json`.
5. Run `node web/scripts/verify-designs.mjs --slug=lacrapule-studio`.
