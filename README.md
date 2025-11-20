# 🐱 Gattati --- Customized Cat Image Generator

**Gattati** is a simple and fun web app that automatically generates a
cat image with a custom phrase, based on the parameters selected by the
user.\
The site uses the public **CATAAS (Cat As A Service)** API to fetch
dynamic cat images.

👉 **Live site:** https://gattati.onrender.com/

------------------------------------------------------------------------

## About The Project
I had just started to study PHP in a University course when I found out about the existance of the **CATAAS** API.
I immediatly imagined a possible site to simplify the image generation with the specific parameters such as the cat tag and the text inside the image.

I envisioned 3 possible scenarios: 

    1. The user just want a basic cat picture with no attributes -> Just press the Invia button and you'll get a random cat image.
    
    2. The user want a cat picture specific to one of the allowed tags ( called mood in the site ) -> Just select the mood in the selection bar and press Invia.

    3. The user want a customized picture with personalized mood and text -> Choose the mood, insert the phrase you want to display in the text area below and press Invia.

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
