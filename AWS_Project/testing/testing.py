from selenium import webdriver
from selenium.webdriver.chrome.service import Service

PATH = "~/Downloads/chromedriver_linux64/chromedriver.exe"
service = Service(PATH)

driver = webdriver.Chrome(service=service)

driver.get("https://www.google.co.in")

driver.quit()

