# KALA — Olivekala Brand Design System

> Category: Custom · Premium Olive Oil · Aegean Editorial
> A press-weight serif editorial system rooted in the Ayvalık grove.
> Deep Aegean olive on warm press-paper — for the professional's table,
> not the wellness shelf.

---

## 1. Visual Theme & Atmosphere

Unhurried. Precise. Agricultural in the best sense — the look of a product
that earns its claim. Think a Monocle food feature crossed with a Michelin-
starred kitchen's order ticket: considered whitespace, ink-weight typography,
zero decoration that does not carry meaning.

The brand is not aspirational lifestyle. It is specification and provenance.
Every visual decision should reinforce that posture: spare, confident, honest.
No gradients. No glow. No stock photography warmth. Real light on real objects.

---

## 2. Color Palette & Roles

| Token           | Hex       | Role                                                      |
|-----------------|-----------|-----------------------------------------------------------|
| `--bg`          | `#F9F6F0` | Warm press-paper — all page backgrounds                   |
| `--fg`          | `#1A1814` | Near-black, warm undertone — body text, borders           |
| `--accent`      | `#2E5D3B` | Aegean olive green — primary CTAs, hero elements, 1 per screen |
| `--gold`        | `#7A5C1E` | Harvest gold — secondary labels, stats, batch numbers     |
| `--muted`       | `#8A817A` | Warm grey — metadata, captions, timestamps                |
| `--surface`     | `#FFFFFF` | Elevated cards only — never as page bg                    |
| `--rule`        | `#D4CFC8` | 1px dividers, borders at rest                             |

**Never** use pure `#000000` or `#FFFFFF` for user-facing text or backgrounds.
**Never** invent a new hex. If a request needs a color outside this palette, use `--muted` and flag it.
**One accent element per screen.** If the hero uses `--accent`, all secondary CTAs use `--fg`.

---

## 3. Typography Rules

### Typefaces
- **Display / H1–H2:** `'Cormorant Garamond', 'Times New Roman', Georgia, serif`
  — Use at 400 weight for editorial elegance; 600 for emphasis within display.
- **Labels / H3–H4 / UI:** `'DM Sans', -apple-system, system-ui, sans-serif`
  — 400 for body, 500 for labels, 600 for CTAs only.
- **Mono / batch numbers / specs:** `'JetBrains Mono', ui-monospace, monospace`
  — Spec tables, certificate numbers, acidity values.

### Scale (px, desktop)
`11 · 13 · 15 · 18 · 24 · 36 · 52 · 76 · 108`

### Rhythm
- Body line-height: 1.7
- Display line-height: 1.1 (tight, press-weight)
- Letter-spacing: `−0.03em` for display ≥ 52px; default below.
- Paragraph max-width: 68ch (body copy); 48ch (pull-quotes).

### Case
- H1 / H2: Title Case or all-lowercase italic for editorial emphasis
- H3 and below: Sentence case
- Labels / tags: ALL CAPS, 0.08em tracking, 11px

---

## 4. Component Stylings

### Buttons
- **Primary (--accent fill):** `background: var(--accent)`, `color: #F9F6F0`,
  `padding: 14px 28px`, `font: 500 13px DM Sans`, `letter-spacing: 0.06em`,
  `text-transform: uppercase`, `border-radius: 2px` (near-square — no pill).
- **Secondary (outlined):** `border: 1px solid var(--fg)`, transparent fill,
  `color: var(--fg)`, same sizing. On hover: `background: var(--fg)`, `color: var(--bg)`.
- **Ghost / text link:** `color: var(--accent)`, 1px `var(--accent)` underline at 40% opacity. No box.

### Cards
- Background: `var(--bg)` (not white — keeps them on the page, not floating).
- Border: `1px solid var(--rule)`.
- Radius: `4px` — sharp enough to signal precision.
- Padding: `32px` desktop, `24px` mobile.
- No shadow at rest. Hover: `box-shadow: 0 2px 20px rgba(26,24,20,0.06)`.

### Stat / Spec blocks
- Mono value in `--gold` at display scale (52–76px).
- Label in `--muted` at 11px ALL CAPS below.
- 1px `--rule` divider between columns.

### Form inputs
- Underline-only. `border-bottom: 1px solid var(--rule)`, no box border.
- On focus: `border-bottom: 2px solid var(--accent)`.
- `font: 15px DM Sans`, `padding: 12px 0`, `background: transparent`.
- Error state: `border-bottom: 1px solid #B5341A`.

### Tags / Badges
- `font: 500 11px DM Sans`, `letter-spacing: 0.08em`, `text-transform: uppercase`.
- `padding: 4px 10px`, `border: 1px solid var(--rule)`, `border-radius: 2px`.
- `color: var(--muted)`, `background: transparent`.

---

## 5. Layout Principles

- **Grid:** 12-column, `1280px` max-width, `24px` gutters.
- **Hero:** Full-viewport height (100svh), text top-aligned with `120px` top padding.
  Content in left 7 of 12 columns. Never centred vertically.
- **Section rhythm:** `120px` top+bottom at desktop; `72px` tablet; `48px` phone.
- **Section counter:** Small `01 /`, `02 /` labels in `--muted` mono above each section heading.
- **Pull-quotes:** Indented `48px` left, left `3px` border in `--accent`, `font: italic 24px Cormorant`.
- **Max prose width:** Always cap body copy at `68ch` regardless of grid width.

---

## 6. Depth & Elevation

Two levels only:
- **Flat (0):** Everything default.
- **Raised (1):** Card hover, dropdown, floating CTA — `0 2px 20px rgba(26,24,20,0.06)`.

**No neumorphism. No glassmorphism. No blurs. No gradients.**
The paper background *is* the depth system.

---

## 7. Motion & Animation

- **Duration:** 200ms ease-out (UI interactions); 400ms ease (page transitions).
- **Hover state:** Transform only — `translateY(-1px)` on cards, buttons.
- **No bounces, springs, or playful easing** — this is not a consumer app.
- **Reduced motion:** All animations respect `prefers-reduced-motion: reduce`.

---

## 8. Brand Voice & Tone

**In copy:** Precise, professional, no lifestyle claims. Write for the chef, not the consumer.
- **Do:** "0.3% free acidity. Batch certified. October only." — specifics.
- **Do:** "Cold-extracted within four hours." — process, not feeling.
- **Don't:** "Liquid gold." "Nature's gift." "Crafted with love." — banned.
- **Don't:** Generic wellness framing. KALA is an ingredient, not a supplement.

**Numerals:** Always show the number — `0.3%`, not "low acidity". `<4h`, not "fast".
**Punctuation:** Em dash (—) for asides. No exclamation marks in product copy.
**Italics:** Used sparingly in display for a single emphasis word — never whole sentences.

---

## 9. Anti-Patterns (Never)

- ❌ Gradients — any direction, any color.
- ❌ Drop shadows on text.
- ❌ Border-radius above `8px` on product UI elements; `24px` max on decorative only.
- ❌ Stock photography with people. Only real product, real grove, real process.
- ❌ Emoji in product or spec copy.
- ❌ Invented metrics ("10× better," "premium quality," "world-class").
- ❌ Pure white or pure black anywhere user-facing.
- ❌ More than one `--accent` element per screen section.
- ❌ Wellness or lifestyle framing ("cleanse," "nourish," "pure goodness").
- ❌ Inter or Roboto as display — only Cormorant Garamond for display.

---

## 10. Responsive Behaviour

| Breakpoint     | Grid     | Hero height | Section padding | Notes                        |
|----------------|----------|-------------|-----------------|------------------------------|
| ≥ 1280px       | 12-col   | 100svh      | 120px           | Full editorial layout        |
| 1024–1279px    | 12-col   | 90svh       | 96px            | Slight type scale reduction  |
| 768–1023px     | 8-col    | 80svh       | 72px            | Two-column product grid      |
| < 768px        | 4-col    | 70svh       | 48px            | Single column; type -1 step  |

---

## 11. Agent Prompt Guide (open-design)

When generating artifacts against this design system:

- Lead with whitespace and typography. Chrome (borders, dividers, shadows) is subtractive — add only when removing would lose meaning.
- Stat blocks are a core component. Use them for `0.3%`, `<4h`, `3000yr`, `IOC`. Mono value in `--gold`, label in `--muted`.
- Section numbers (`01 /`, `02 /`) are mandatory. They signal editorial structure without adding decoration.
- If asked for "premium," lean harder on whitespace + serif + restraint. If asked for "modern," this system leans editorial — acknowledge the tension before proceeding.
- Every product description ends with a specification list (acidity, format, certification). Never omit this.
- The hero must contain a stat bar. Minimum three figures. No animation except a slow fade-in on load.
- Color tokens are non-negotiable. Flag in a comment if a request requires something outside the palette; use closest token and continue.
- Prefer 1 hero + 4–6 body sections over 1 hero + 10+ sections. Editorial means restraint.
- Never write marketing superlatives in copy. Write specification instead.
