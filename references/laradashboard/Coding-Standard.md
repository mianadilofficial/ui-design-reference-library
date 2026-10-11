# Coding Standard

This document outlines the coding standards and best practices for contributing to the project. Adhering to these guidelines will help maintain code quality and consistency across the codebase.

## General Guidelines

1. **Code Clarity**

    - Write clear and understandable code. Use meaningful variable and function names.
    - Avoid complex logic in a single function; break it down into smaller, reusable functions. Function names should be descriptive of their purpose, it could be long if necessary.

    For example, to add a taxonomy to post types, instead of using a generic function name like `add`, use a more descriptive name like `addTaxonomyToPostTypes`:

    ```php
    function add($taxonomy, $postTypes) {
       // logic to add taxonomy to post types
       // Handle cache.
    }
    ```

    Use:

    ```php
    function addTaxonomyToPostTypes(string $taxonomy, array $postTypes) {
       // logic to add taxonomy to post types ...

       $this->storeCacheForTaxonomy($taxonomy, $postTypes);
    }

    function storeCacheForTaxonomy(string $taxonomy, array $postTypes) {
       // logic to store cache for taxonomy ...
    }
    ```

1. **Documentation**

    - Document your code with comments where necessary. But **_we prefer self-documenting code_** instead of excessive comments.

    **Why:** Comments can become outdated or misleading if the code changes, leading to confusion. Self-documenting code is easier to maintain and understand.

    For example, instead of commenting on what a function does, use a descriptive function name:

    ```php
    /**
    * Get all published posts.
    */
    function getData() {
       return Post::where('status', 'published')->get();
    }
    ```

    **Use:**

    ```php
    function getPublishedPosts() {
       return Post::published()->get();
    }
    ```

1. **Security**

    - Sanitize and validate all user inputs. Request validation should be done using Laravel's built-in custom request validation file (e.g., `UpdatePostRequest`) **not inside the controller**.
    - Use authentication and authorization checks in almost every controller method before performing actions.

    For example: To check if the user is authorized to edit a post, use the following code:

    ```php
    $this->checkAuthorization(Auth::user(), ['post.edit']);
    ```

1. **Performance**

    - Optimize code for performance where necessary, but prioritize readability and maintainability over premature optimization.

    **_Not do:_**

    ```php
    $posts = Post::where('status', 'published')->get();
    ```

    **_Do:_**

    ```php
    $posts = Post::published()->get();
    ```

    - Use eager loading to reduce the number of database queries when retrieving related models.

    ```php
    $posts = Post::with('author')->get();
    ```

    - Use caching for expensive operations or frequently accessed data, **_but ensure that the cache is invalidated_** when the underlying data changes.
      If you can't ensure cache invalidation, we would prefer not to use caching mechanisms.
    - Use Laravel's built-in caching mechanisms (e.g., `Cache::remember()`)

    ```php
    $posts = Cache::remember('posts', 60, function () {
        return Post::published()->get();
    });
    ```

1. **Extensibility**

    - If implementing functionality that might be useful for extension, create action/filter hooks, don't hardcode functionality.
    - Use the `Hook::addAction()` and `Hook::doAction()` functions for actions which will do something but not return anything.
    - Use the `Hook::addFilter()` and `Hook::applyFilters()` functions for filters which will return something.

   Example of adding a filter hook to modify the admin menu groups:

   ```php
   <?php
   use App\Support\Facades\Hook;

   Hook::addFilter('admin_menu_groups_before_sorting', addNewMenuGroup());
   function addNewMenuGroup($groups) {
      // Your code to add a new menu group
      return $groups; // or modified $groups
    }
   ```

    - If you feel that a certain functionality should be extensible, consider creating a new Pull request to add that extendibility hook.

1. **Error Handling**

    - Use exceptions for error handling instead of returning error codes. We prefer custom Exception instead of using Laravel's built-in exceptions `Exception` class always.

    For example,
    Instead of:

    ```php
    if (!File::exists($this->modulesPath)) {
      throw new \Exception(message: __('Modules directory does not exist. Please ensure the "Modules" directory is present in the application root.'));
    }
    ```

   **Use:**

   ```php
   if (!File::exists($this->modulesPath)) {
      throw new ModuleException(message: __('Modules directory does not exist. Please ensure the "Modules" directory is present in the application root.'));
   }
   ```

   Where `ModuleException` is a custom exception class that extends the base `Exception` class.

    ```php
   <?php

   declare(strict_types=1);

   namespace App\Exceptions;

   use Exception;

   class ModuleException extends Exception
   {
   }
   ```

1. **Testing**
   - Write unit tests for your code where applicable.
      - Use PHPUnit for writing tests and follow the naming conventions for test classes and methods.
      - Use the `php artisan test` command to run your tests.

1. **Code Reviews**
   - Provide constructive feedback and be open to receiving it.
   - When reviewing code, focus on the code's functionality, readability, and adherence to coding standards.

## Coding Standards

### PHP Code Style

1. **PHP Code Style**
    - Follow PSR-12 coding standards.
    - Use type hints for parameters and return types in 99% cases almost.
    - Use strict typing where possible.
```php
<?php

declare(strict_types=1);

namespace App\Http\Requests\Post;
```

### Naming Conventions
   - Methods: Use camelCase for method names (e.g., `getUserData`).
   - Variables: Use camelCase for variable names (e.g., `$userData`).
   - Constants: Use UPPER_SNAKE_CASE for constants (e.g., `MAX_USERS`).
   - Exceptions: Use PascalCase with `Exception` suffix (e.g., `ModuleException`).
   - Traits, Models, Controllers: Singular, PascalCase (e.g., `UserController`, `Post`, `HasRolesTrait`).
   - Services: Singular with Service suffix, PascalCase (e.g., `UserService`).
   - Database: Use snake_case for tables and columns.

### Frontend Code Style
1. **Use generic class names for styling**
    - Use generic classes for styling instead of inline styles or specific classes. Look for generic classes inside of `resources/css/components.css` file.

   For example, instead of custom button like this

   ```html
   <div class="bg-blue-500 text-white px-4 py-2 rounded">
      Save
   </div>
   ```
   **Use:**

   ```html
   <button class="btn-primary">
         Save
   </button>
   ```

   Similar things applicable for other components like forms, inputs, badges, etc.

   - Use Tailwind CSS classes for styling, following the utility-first approach.

1. **Use generic components**
   - Use generic components for common UI elements like combobox, password input, buttons, etc. This promotes reusability and consistency across the application.

   Components Path: `resources/views/components`

   For example, instead of creating a custom password input like this:

   ```html
   <div class="w-full flex flex-col gap-1">
      <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
         Password
      </label>

      <div x-data="{ showPassword: false }" class="relative">
        <input
            :type="showPassword ? 'text' : 'password'"
            name="password"
            id="password"
            placeholder="Enter your password"
            required
            class="form-control" />

        <button type="button" @click="showPassword = !showPassword" class="absolute z-30 text-gray-500 -translate-y-1/2 cursor-pointer right-4 top-1/2 dark:text-gray-300 flex items-center justify-center w-6 h-6">
            <iconify-icon x-show="!showPassword" icon="lucide:eye" width="20" height="20" class="text-[#98A2B3]"></iconify-icon>
            <iconify-icon x-show="showPassword" icon="lucide:eye-off" width="20" height="20" class="text-[#98A2B3]" style="display: none;"></iconify-icon>
        </button>
      </div>
   </div>
   ```

   **Use:**
    ```html
   <x-inputs.password
      name="password"
      label="{{ __('Password') }}"
      placeholder="{{ __('Enter your password') }}"
      required="true"
   />
   ```
   - You can see lots of other components of LaraMesh here -
      - alerts -
      ```html
      <x-alerts.error :message="Session::get('error')" />
      ```
      - buttons
      - cards
      - charts
      - inputs
      - modals
      - filters


