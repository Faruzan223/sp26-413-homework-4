## Author: Faruzan Halimi

## Assignment 4: Custom WordPress Plugin

### Plugins vs. Theme Functions

Plugins are used for functionality that should remain active of the site’s theme. The features in this plugin extend content behavior and editor tools, which makes a plugin more appropriate than placing code in functions.php. Keeping this logic in a plugin also ensures it continues to work even if the site theme changes.

### Actions vs. Filters

Action hooks allow developers to run code at specific points in WordPress environemnt while filter hooks modify the data before it is displayed. In my plugin, an action hook is used to enqueue the plugin-specific styles, and a filter hook is used to append a message to single post content. These demonstrate how WordPress can be extended without editing core files.

### Shortcodes

Shortcodes allow editors to insert dynamica and styled content using simple text tags. My plugin includes a shortcode that displays a styled alert box and accepts a custom text attribute which can be used to highlight breaking news or important announcements within posts.

### Real-World Reflection

My custom plugin improves The Metro Report by giving editors reusable tools without modifying theme files. The content filter reinforces reader engagement by appending a consistent call‑to‑action. The shortcode allows editors to quickly add attention‑grabbing alerts to make breaking news clearer and easier to highlight.
