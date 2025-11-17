# 🐱 Gattati --- Customized Cat Image Generator

**Gattati** is a simple and fun web app that automatically generates a
cat image with a custom phrase, based on the parameters selected by the
user.\
The site uses the public **CATAAS (Cat As A Service)** API to fetch
dynamic cat images.

👉 **Live site:** https://gattati.onrender.com/

------------------------------------------------------------------------

## 🚀 Features

-   Parameter selection via HTML form.
-   Dynamic generation of the cat image URL using the **CATAAS** API.
-   Displays the final customized cat image directly on the page.
-   Backend fully handled with **PHP** in a single file.

------------------------------------------------------------------------

## 🧩 Technologies Used

-   **PHP** --- for processing parameters and dynamically generating the
    image URL.
-   **HTML & CSS** --- for the user interface.
-   **CATAAS API** --- https://cataas.com/
-   **Render.com** --- for hosting the site.

------------------------------------------------------------------------

## 📦 How It Works

1.  The user selects the parameters in the form.
2.  `index.php` receives the data via GET.
3.  A CATAAS‑compatible URL is assembled.
4.  The resulting image is displayed on the page.

------------------------------------------------------------------------

## 🛠 Example URL Generation

    https://cataas.com/cat/says/Hello?width=400&height=400&color=white

------------------------------------------------------------------------

## 🤝 Contributions

Contributions, suggestions, and improvements are welcome!\
Feel free to open an issue or a pull request.

------------------------------------------------------------------------
