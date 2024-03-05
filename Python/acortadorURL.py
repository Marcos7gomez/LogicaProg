import pyshorteners
import streamlit as st

def shorten_url(url):
    s = pyshorteners.Shortener()
    shortened_url = s.tinyurl.short(url)
    return shortened_url

# Creo pagina con streamlit
st.set_page_config(page_title="Acortador de URL", page_icon="👀", layout="centered")
st.image("image/py.png", use_column_width=True)
st.title("Acortador de url")
url = st.text_input("Agregá la URL")
if st.button("Generar nueva URL"):
    st.write("URL acortada: ", shorten_url((url)))
