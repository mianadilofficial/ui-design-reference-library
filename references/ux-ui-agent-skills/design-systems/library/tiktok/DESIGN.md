---
version: alpha
name: TikTok
category: "Product & SaaS"
description: "TikTok logged-out feed: a white #ffffff shell around a portrait video, TikTokFont type at 12-17px (15px/500 labels, 14px body), black #000000 navigation and one hot pink-red #fe2c55 pill button 32px tall with a #ea284e hover."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#fe2c55"
  on-primary: "#ffffff"
  ink-secondary: "#f6f6f6"
  ink-on-video: "#ffffffe0"
  ink-muted: "#16182380"
  ink-subtle: "#161823bf"
  primary-hover: "#ea284e"
  link-bg: "#33333399"
typography:
  display:
    fontFamily: TikTokFont, Arial, Tahoma, PingFangSC, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 19px
    letterSpacing: 0.15px
  body:
    fontFamily: >-
      TikTokFont, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, Roboto, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: 0.0938px
  link:
    fontFamily: >-
      TikTokFont, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, Roboto, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.1608px
rounded:
  xs: 6px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 52px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.pill}"
    padding: 1px 8px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"

---

# TikTok — Design System

## Overview
The measured page is https://www.tiktok.com/, titled "TikTok - Make Your Day", opened logged out with a Thai-language feed. The layout is an app shell: a white left sidebar with the TikTok logo, a pale grey search field, eight destinations (For You, Explore, Following, Short dramas, LIVE, Upload, Profile, More), a wide pink-red "Log in" button, and small footer links (Company, Program, Terms & Policies, "© 2026 TikTok"). The center is dominated by a tall rounded vertical video player showing a Thai school scene, with the creator handle, caption, a "See translation" link, a music line and a thin red progress bar at its base. To its right is a column of round action buttons (avatar with a red plus, like count 287.7K, comments 4851, saves 9946, shares 16.7K), up and down arrows for the next video, and at the top right a floating white pill with a compass icon, a phone icon and a second red "Log in" button. The mood is app-like and content-first: the interface is white and quiet while the video supplies all the color, and one hot pink-red marks the main action and the active nav item.

## Colors
`{colors.canvas}` is white (#ffffff) for the shell, `{colors.ink}` is black (#000000) for navigation labels, and `{colors.primary}` (#fe2c55) is the brand red-pink used for the Log in buttons, the active "For You" nav item, the video progress bar, and the plus badge; the site's variable `--tux-colorPrimary` has the same value. `{colors.primary-hover}` (#ea284e) is the measured hover fill, and `{colors.on-primary}` is white. Text over video uses light colors: `{colors.ink-secondary}` (#f6f6f6) for the caption and `{colors.ink-on-video}` (#ffffffe0, white at about 88 percent) for overlay labels, while `{colors.ink-muted}` (#16182380, a dark navy at 50 percent) and `{colors.ink-subtle}` (#161823bf, the same navy at about 75 percent) give secondary text on white, such as footer links. `{colors.link-bg}` (#33333399) is the translucent dark chip behind the "CapCut · Editing made easy" tag on the video. Text over imagery is placed on a darkening gradient at the bottom of the video, so the light text stays legible.

## Typography
The page's own font is TikTokFont (400 to 700 weights measured) with a display companion named TikTokDisplayFont, falling back through Arial, Tahoma, PingFangSC and system sans-serif. The H1-role button text `{typography.display}` is 15px at weight 500 with 19px line height and 0.15px tracking, and is also the style of the Log in label; body text `{typography.body}` is 14px/400 with an 18.2px line height and 0.0938px tracking; small links `{typography.link}` are 12px/400 with 15.6px line height. The measured sizes are 12, 14, 15, 16 and 17px; the site's own variable `--tux-v2-typography-h1-size` is 24px, but no 24px text appears on this feed page. The type is small, tightly spaced and uniform, the typical density of a feed app.

### Font substitutes
TikTokFont and TikTokDisplayFont are proprietary. The site's declared fallbacks (Arial, Tahoma, PingFangSC, system-ui and Roboto or Noto Sans) are the honest substitutes.

## Layout
A fixed 3-zone layout: a left sidebar column, a central video stage, and a right-hand action column attached to the video. Spacing steps measured are 1, 4, 6, 8, 10, 12, 16 and 20px (see `{spacing.s1}` through `{spacing.s8}`); gaps are 4, 6, 8, 10, 12 and 16px. The stage presents one video at a time in a portrait frame centered in a mostly empty white page, and vertical arrows (a circular up and down pair) switch videos. The sidebar items are evenly spaced rows of icon plus label.

## Elevation & Depth
Shadows are light: `rgba(0, 0, 0, 0.12) 0px 0px 1px 1px` as a hairline halo and `rgba(0, 0, 0, 0.07) 0px 2px 10px 0px` under the floating top-right pill. The video frame has no shadow, its depth coming from color contrast with the white page. Overlays on the video use translucent grey fills (`#33333399`, `#88888880`) in place of shadows.

## Shapes
Radii measured: 6px (`{rounded.xs}`), 16px (`{rounded.md}`), 24px, 999px and 9999px (`{rounded.pill}`), 50 percent for round icon buttons, and split 16px top-only or bottom-only corners. The primary buttons are pills at 32px height. The video stage has rounded corners drawn with the 16px level, matching the site's `--tux-v2-radius-container-level2-small` (16px). Other radius variables include `--tux-v2-radius-content-tiny` (4px) and `--tux-v2-radius-content-xlarge` (12px).

## Components
`button-primary` is the Log in pill: fill `{colors.primary}`, label `{colors.canvas}` in `{typography.display}`, height 32px, padding 1px 8px, radius `{rounded.pill}`, hover fill `{colors.primary-hover}`. In the sidebar the same button is stretched across the column width with the same red-pink fill. `link` is the small translucent chip on the video ("CapCut · Editing made easy") in `{typography.link}` white on `{colors.link-bg}`. The search field is a grey capsule with a magnifier icon, and nav rows are icon plus 15px label with red-pink only on the active row. Action buttons beside the video are circular grey icon buttons with count captions below.

## Design System Architecture
No public TikTok design-system documentation was opened for this write-up; this describes the system visible in the page at https://www.tiktok.com/. The page exposes about 400 custom properties, of which 312 are named `--tux-*` (a "TUX" namespace), organized into versioned groups such as `--tux-v2-typography-*`, `--tux-v2-radius-*` (content and container levels), `--tux-v2-color-*` (feed components, live, social avatars, misc) and brand-gradient entries like `--tux-v2-color-brand-ai-gradient-2` (#00edea). A single semantic color, `--tux-colorPrimary` (#fe2c55), drives the main accent, with opacity variants such as `--tux-colorPrimary-opacity-12`. The documentation behind the TUX naming was not read, so only the exposed variables are described.

## Do's and Don'ts
Do keep the shell white and neutral and let the video be the color. Do reserve #fe2c55 for the main action and the active nav item. Do use 32px pill buttons with 15px/500 labels. Do place overlay text over video only on a dark gradient or translucent chip. Don't add a second accent hue to the shell. Don't use drop shadows on the video frame. Don't stretch headline-size type in the feed; the entire interface is 12 to 17px. Don't treat browser default link colors as brand colors.

## Responsive Behavior
A mobile pass was captured and shares the same font family. On desktop the shell uses a sidebar; the floating top-right pill (compass, phone, Log in) is a compact stand-in for the sidebar's actions when its space is gone. Exact breakpoints were not recorded in the measured data, so none are stated.

## Iteration Guide
Start with a white canvas, a left sidebar of eight icon-plus-label rows, and a centered portrait video. Make one pill button in `{colors.primary}`, 32px tall, 15px/500 label. Put creator handle, caption and music on the video's bottom gradient in `{colors.ink-secondary}`, and show counts under round action buttons in 12px type. Keep secondary text in the navy-tinted greys. Check new values against the TUX variables, measured palette and radii listed above before introducing them.

### Imagery and voice
The visible content is a user-generated portrait video of schoolchildren and a teacher in a Thai classroom corridor, with a caption in Thai and an English "See translation" link beneath it. The product voice is minimal and verb-first: "Log in", "Upload", "Explore", "Following". Counts are shortened in the K style (287.7K, 16.7K) and shown in small type under each icon. Imagery is never framed by decoration; the video fills its container edge to edge, with only a small chip and a thin red progress line layered on top. For any new screen, let real content, not illustration, occupy the center, and use iconography at one consistent outlined weight.
