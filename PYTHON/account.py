class Account:
    id = int
    name = str
    password = str
    email = str
    document = str

    def __init__(self, name, document, email, password):
        self.name = name
        self.document = document
        self.email = email
        self.password = password
