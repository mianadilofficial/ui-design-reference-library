# Rule: Component design

Loaded when designing, specifying, or reviewing a component.

Split out of `CLAUDE.md` so it loads only when the work calls for it. The
headings below are unchanged, so any pointer to them still resolves.

---

## Design Principles

### Atomic Design
Build from small to large: **Atoms → Molecules → Organisms → Templates → Pages**
- Atoms are indivisible (Button, Input, Icon)
- Molecules combine atoms for a task (Form Field = Label + Input + Error)
- Organisms are complex sections (Header, Data Table, Modal)
- Templates define page-level layout (Dashboard, Auth, Settings)
- Reference: `components/atoms.md`, `components/molecules.md`, `components/organisms.md`, `components/templates.md`

### Design Thinking
Follow the double diamond: **Discover → Define → Develop → Deliver**
- Diverge before converging: explore multiple solutions before committing
- Validate at every fidelity level (see `workflows/prototyping.md`)
- User research is not optional. See the usability testing script in `workflows/prototyping.md`

### Inclusive Design
Design for the edges, and the center benefits:
- WCAG 2.2 AA is the **minimum**, not the goal (see `accessibility/wcag-checklist.md`)
- Keyboard navigation is not an afterthought: it's designed first
- Color is never the only way to convey information
- Target sizes: 24×24px minimum (WCAG 2.5.8), 44×44px recommended for primary actions
- See ARIA implementation patterns in `accessibility/aria-patterns.md`

### Progressive Disclosure
Show only what's needed at each step:
- Primary actions are always visible
- Secondary actions are one interaction away (menu, expand)
- Advanced options are behind explicit "Advanced" disclosure
- Empty states guide users to the first action
- Error messages explain what happened AND how to fix it

---

## Composition, before anything is styled

A blind cold-start run produced two screens that passed all fourteen gates and still
came back from review as "rework". Everything the critic named was a composition
decision no gate can see, so the decisions live here.

1. **One thing leads.** Every screen has a first place for the eye. Four equal stat
   cards, three equal plan cards, a grid of identical tiles: the eye lands nowhere
   and the screen reads as generated. Give the lead item more size, more weight, or
   its own row, and let the rest be quiet.
2. **Display type is a different size, not a bolder body.** The largest heading
   should be at least 2.5x the body size. 24px over 16px is bold body text.
   `taste_audit.mjs` measures this and calls it a HIGH finding.
3. **An empty state owns the viewport it is in.** A small centred block pinned under
   the header with a thousand pixels of nothing below it reads as a page that failed
   to load, not as a considered zero-state. Fill the space or centre in it, and give
   the sparse case real content: what this will look like, what to do first.
4. **A page ends on purpose.** A footer, a summary line, a secondary panel: something
   that says the content is finished rather than missing.
5. **A long list needs one differentiator.** Forty identical cards are forty
   identical cards. Surface something that varies (recency, status, a badge) so the
   eye has somewhere to land while scrolling.
6. **Feedback may not outrun the truth.** A toast that says "Draft project created"
   while the list still shows the same items is a lie the user catches immediately.
   Either change the data or change the copy.
7. **A hidden overflow needs a visible cue.** A table that scrolls sideways inside
   its own region must show that it does - an edge fade, a scrollbar, an arrow. An
   `aria-label` mentioning it serves screen readers only, and sighted users simply
   lose the columns.
8. **Loading is not disabled.** Reusing the disabled dimming for an in-flight action
   reads as "you cannot do this", not "this is happening". Keep the control at full
   strength and swap the label for a spinner.
9. **Nothing that is scaffolding ships.** A preview checkbox, a debug toggle, a
   "test" row: if it is not product, it does not render in the product screen. Put it
   behind a query parameter or a build flag.

---

## Form rows: equal controls, unequal content

A grid or flex row stretches its items by default. Put two fields side by side
where only one carries a hint, and the hint-less control grows taller to fill the
row - two inputs that should be identical end up visibly different heights. It
looks like a rendering bug and it ships constantly.

- Give the row `align-items: start` (or the field `align-content: start`).
- Give the control an explicit `block-size` from the size scale, not only a
  `min-block-size`, so it cannot be stretched by a neighbour.
- The same trap hits buttons in a toolbar, cards in a row where one has a badge,
  and table cells where one column wraps to two lines.

Check it by measuring, not by looking: every control in a row should report the
same height in the rendered page.

---

## Spacing: rows, gaps and gutters

Three rules a reviewer sees at a glance and no colour or contrast gate measures.
`node scripts/verify_spacing.mjs <file|dir>` measures the first two on the render.

1. **Cards that share a row share a height.** Two channel cards, three plan tiles,
   a pipeline of columns: if they sit side by side, they end on the same line. A
   grid or flex row stretches its items by default, so the bug is almost always an
   `align-items:start` someone added. Remove it, and push a card's last line (a
   note, an action) to its bottom edge so the endings align too. An item that
   deliberately spans two rows (a bento lead tile) is the exception. The rule holds
   when only one of them draws a box: a repairs tile at the end of a row of product
   cards ends where the cards end. A plain text column beside a card is copy, not a
   card, and a sticky column has to sit at the top to stick.
2. **Nothing touches.** A button, a field, a badge or a card keeps at least
   `--space-2` (8px) from the thing next to it, stacked or side by side, and that
   includes what happens when a row wraps on a phone: a badge that drops under its
   heading needs a `row-gap`, not luck. Two exceptions, both deliberate: a label sits
   `--space-1` (4px) from its own control, and the segments of one control (a
   segmented button, a stepper's minus, value and plus) may join inside the box that
   draws them as one thing.
3. **Gaps and gutters are consistent.** Every gap comes from the spacing scale, and
   one relationship gets one gap: if two cards in this grid are 24px apart, every card
   in every grid like it is 24px apart, and a label sits the same distance from its
   field on every form. The page has one gutter: section content starts on the same
   left edge from the masthead to the footer, and a band that breaks out to full
   width brings its content back to that edge.

---

## Narrow-width defences (the four causes that actually bite)

A layout that fits at 280px on one machine can overflow on another, because font
metrics differ per platform. Prove it with `node scripts/verify_responsive.mjs
<file|dir> --scale=1.25`, and know the usual causes:

1. **An `<input>` keeps an intrinsic width of about twenty characters.** In a grid
   that intrinsic width sizes the column. Fix: `inline-size:100%; min-inline-size:0`.
2. **A grid or flex item keeps `min-width:auto`**, so a child that refuses to shrink
   widens its own track. Fix: `min-inline-size:0` on the item, or pin the track with
   `grid-template-columns:minmax(0,1fr)`.
3. **One unbreakable token** (an email, a URL, an API key) sets the element's
   min-content width. Fix: `overflow-wrap:anywhere`, which shrinks min-content too;
   `break-word` alone does not.
4. **A `white-space:nowrap` tooltip or pill has no upper bound.** Fix:
   `max-inline-size:min(<n>rem, calc(100vw - <gutter>))`.

And one that hides from screenshots: an absolutely positioned **`.sr-only` span with
no positioned ancestor** resolves against the initial containing block. Inside a
horizontal scroller it lands outside the viewport and inflates
`document.documentElement.scrollWidth`, so the page reports a huge overflow while
everything visible sits inside it. Give the span a positioned ancestor.

---

## Foldables: iPhone Duo

A page on iPhone Duo gets one of five viewports. WebKit published them for
Safari 27.1, in CSS px:

| Screen and pose | Width |
|---|---|
| Outer screen, upright | 382 |
| Inner screen, two windows side by side (each) | 385 |
| Outer screen, on its side | 594 |
| Inner screen, upright | 669 |
| Inner screen, on its side | 951 |

1. **382 and 385 are phone widths.** A mobile-first base already covers them.
   594 to 951 is where a layout grows from one column to two, and where it breaks
   when a breakpoint lands between them. Test all five.
2. **One layout across the hinge is the default, and it is fine.** Safari 27.1
   ships the Device Posture and Viewport Segments APIs behind feature flags, so
   most visitors see one viewport across the fold. Never make the fold a
   requirement for the page to work.
3. **If you answer the fold, answer it all the way.** Once the layout changes
   when the screen folds, the page has claimed to know where the hinge is.
   Then give each pane exactly one segment, make the gap between them the hinge,
   and put nothing readable or tappable on it. Every `env()` keeps a fallback
   that is the unfolded layout:

```css
@media (horizontal-viewport-segments: 2) {
  .split {
    grid-template-columns: env(viewport-segment-width 0 0, 1fr) env(viewport-segment-width 1 0, 1fr);
    column-gap: calc(env(viewport-segment-left 1 0, 0px) - env(viewport-segment-right 0 0, 0px));
  }
}
```

4. **Detect the feature, never the device.** The media query and
   `window.viewport.segments` say what the screen is doing; a user agent string
   does not.
5. **List and detail is the natural split.** The list on one segment, the
   selected item on the other. A three-column layout spread over two segments
   puts its middle column on the hinge.

`node scripts/verify_responsive.mjs <file|dir>` tests the five widths by default,
then renders the page at 951x620 half closed, with a 40px hinge at 455 to 495px
(the band a third party measured in Apple's simulator; Apple does not publish
it). A page that does not react to the fold passes that step untouched. A page
that does react fails if any text or control sits on the hinge. The fold is
emulated in Chrome, not Safari, and only the book pose on its side is tested:
check a real device when you can.

---

## Component Guidelines

### Component Quality Bar
Every component must have:
1. **Anatomy diagram**: Visual structure breakdown
2. **Variants**: All visual variants (primary, secondary, ghost, etc.)
3. **Sizes**: sm, md, lg with exact dimensions
4. **States**: Default, Hover, Focus, Active, Disabled, Loading (minimum 6)
5. **Token mapping**: Every value traced to a design token
6. **Accessibility**: ARIA pattern, keyboard model, screen reader behavior

### Component References
| Level | File | Contents |
|-------|------|----------|
| Atoms | `components/atoms.md` | Button, Input, Label, Icon, Badge, Avatar, Checkbox, Radio, Toggle, Tooltip |
| Molecules | `components/molecules.md` | Form Field, Search Bar, Card, Navigation Item, Alert, Dropdown |
| Organisms | `components/organisms.md` | Header, Sidebar, Form, Data Table, Modal, Drawer |
| Templates | `components/templates.md` | Dashboard, Auth, Settings, List/Detail |

### State Requirements
All interactive components must define these states:

| # | State | Required? | Token Pattern |
|---|-------|-----------|--------------|
| 1 | Default | Always | Base tokens |
| 2 | Hover | Always | `-hover` suffix |
| 3 | Focus | Always | `shadow.focus-ring` |
| 4 | Active/Pressed | Always | `-active` suffix |
| 5 | Disabled | Always | `opacity: 0.5` + no pointer events |
| 6 | Loading | If async | Spinner + `aria-busy` |
| 7 | Error | If input | `border.error` + error message |
| 8 | Selected | If selectable | `interactive.selected-bg` |
