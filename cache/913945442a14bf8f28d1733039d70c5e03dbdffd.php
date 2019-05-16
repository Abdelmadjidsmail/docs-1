---
title: Custom JavaScript
description: todo
extends: _layouts.documentation
section: content
---

Although Livewire should reduce the amount of JavaScript you need to write in your applications, there are certain places where JavaScript is still very much necessary. Therefore, it is important that Livewire plays nice with modern JavaScript tools like Vue out-of-the-box.

## Vanilla JavaScript

To package JavaScript up with a component, just add a `<script>` tag inside the component's root div. For example:

```html
<div>
    <script>alert('Hello World');</script>
</div>
```

## VueJs

Livewire makes it extremely easy to use Vue components inside your Livewire components, and it even goes a step further and interfaces with them directly!

Let's say we have a "<loading-spinner>" Vue component, and we want to use it in our Livewire component.

```php
<div>
    <button wire:click="checkout">Checkout</button>

    <loading-spinner wire:loading></loading-spinner>
</div>
```

That's it!

### Binding data to Vue components
We can even take this integration a step further and actually bind Livewire properties to Vue components.

Let's assume we have a custom Vue component that we typically use for "taggable" input fields called `<input-taggable></input-taggable>`. Normally, inside Vue, you would bind data to this component like so:

```html
<input-taggable v-model="names"></input-taggable>
```

Alternatively, it is possible to instead bind Livewire properties to custom Vue components like so:

```html
<input-taggable wire:model="names"></input-taggable>
```

Livewire will listen for "input" events emitted from the Vue component, and pass down "value" properties just like Vue does. It just works.

## Web Components
Another great way to utilize JavaScript inside Livewire components is HTML5 Web Components. This strategy is preffered to most others because Web Components automatically scope JS and styles to each individual component, so there are no conflicts with Livewire.

Building and using Web Components is outside the scope of this documentation, but the [lit-element](https://lit-element.polymer-project.org/guide) project is a great starting point for writing and using web components easily.
<?php /**PATH /Users/calebporzio/Documents/Code/sites/livewire-docs/cache/a88cb0a9bce4550cdfda1422771b41a0993d4e77.blade.md ENDPATH**/ ?>