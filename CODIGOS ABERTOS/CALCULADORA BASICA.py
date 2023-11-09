import sys
from PyQt5.QtWidgets import QApplication, QWidget, QVBoxLayout, QPushButton, QLineEdit

class Calculadora(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle('Calculadora')
        self.setGeometry(100, 100, 300, 400)

        self.init_ui()

    def init_ui(self):
        self.layout = QVBoxLayout()

        self.resultado_display = QLineEdit(self)
        self.layout.addWidget(self.resultado_display)

        botoes = [
            '7', '8', '9', '/',
            '4', '5', '6', '*',
            '1', '2', '3', '-',
            '0', '.', '=', '+'
        ]

        grid_layout = QVBoxLayout()
        for i in range(4):
            row_layout = QVBoxLayout()
            for j in range(4):
                btn = QPushButton(botoes[i * 4 + j], self)
                btn.clicked.connect(self.botao_clicado)
                row_layout.addWidget(btn)
            grid_layout.addLayout(row_layout)

        self.layout.addLayout(grid_layout)
        self.setLayout(self.layout)

    def botao_clicado(self):
        botao = self.sender()
        texto_atual = self.resultado_display.text()

        if botao.text() == '=':
            try:
                resultado = eval(texto_atual)
                self.resultado_display.setText(str(resultado))
            except Exception as e:
                self.resultado_display.setText('Erro')
        else:
            self.resultado_display.setText(texto_atual + botao.text())


if __name__ == '__main__':
    app = QApplication(sys.argv)
    calc = Calculadora()
    calc.show()
    sys.exit(app.exec_())
