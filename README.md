Q1. Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

I put /books/feature and books/filter/{value?} above /books/{id}, since Laravel checks routes top to bottom and stops at the first match. If /books/{id} came first, visiting /books/feature` would match it instead, since {id} accepts any word, my feature route would never run.

Q2. What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

They get a 404 page instead of an error screen. In show(), I check isset($books[$id]) and call abort(404) if it's false, before the code ever tries to use a missing id.

Q3. Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

I used route('books.show', ['id' => $book['id']]) instead of typing /books/3 directly, so links update automatically if I rename a route. If I had hard-coded the URLs, renaming /books would break every link pointing back to the list page.
