Q1
GET puts form data in the URL, so refreshing repeats the request and may create duplicates. POST + Redirect prevents this; refresh only repeats the harmless GET.

Q2
validate() throws an exception when a rule fails, stopping store(). Laravel redirects back with the old input and errors.

Q3
The success message is flashed for only one request using ->with('success', ...), so the layout displays it once and then it disappears.