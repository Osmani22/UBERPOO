# from driver import Driver
from account import Account


class Car(Account):
    id = int
    license = str
    driver = Account
    passengenger = int

    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
