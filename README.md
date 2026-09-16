# Projeto de Treino Back End

Projeto em PHP com páginas e exercícios organizados nas pastas `1a`, `1b`, `2a` e `2b`.

## Pré-requisitos

- PHP 8.0 ou superior instalado.
- Um terminal, como PowerShell/Prompt de Comando no Windows ou Terminal no macOS/Linux.
- Navegador web.

Este projeto não precisa de `Composer`, banco de dados ou servidor Apache/Nginx para ser executado localmente. O servidor embutido do PHP é suficiente.

## 1. Baixar o projeto

Clone o repositório ou baixe os arquivos e abra um terminal na pasta raiz, a pasta que contém o arquivo `index.php`.

Exemplo:

```bash
cd caminho/para/treino
```

## 2. Instalar o PHP

### Windows

Escolha uma das opções:

- **XAMPP:** instale o XAMPP e certifique-se de que o PHP esteja disponível no terminal.
- **Chocolatey:** em um PowerShell como administrador, execute:

```powershell
choco install php
```

- **Scoop:** em um PowerShell, execute:

```powershell
scoop install php
```

Depois, feche e abra o terminal novamente.

### macOS

Com o [Homebrew](https://brew.sh/) instalado, execute:

```bash
brew install php
```

Se o comando `php` não for encontrado no Apple Silicon, carregue o Homebrew no terminal:

```bash
eval "$(/opt/homebrew/bin/brew shellenv)"
```

Em Macs Intel, o caminho normalmente é `/usr/local/bin`.

### Linux

Ubuntu/Debian:

```bash
sudo apt update
sudo apt install php
```

Fedora:

```bash
sudo dnf install php-cli
```

Arch Linux:

```bash
sudo pacman -S php
```

## 3. Confirmar a instalação

Execute:

```bash
php -v
```

Se aparecer a versão do PHP, a instalação está pronta.

No Windows, se o comando não for encontrado, adicione a pasta que contém `php.exe` à variável de ambiente `PATH` e abra um novo terminal.

## 4. Iniciar o projeto

Na pasta raiz do projeto, execute:

```bash
php -S localhost:8000
```

No macOS com PHP instalado pelo Homebrew, caso o comando ainda não esteja no `PATH`, use:

```bash
/opt/homebrew/opt/php/bin/php -S localhost:8000
```

Depois, abra no navegador:

<http://localhost:8000>

A página inicial do projeto é o arquivo `index.php`.

## 5. Parar o projeto

No terminal onde o servidor está rodando, pressione:

```text
Ctrl + C
```

## Porta ocupada

Se a porta `8000` já estiver sendo usada, escolha outra porta:

```bash
php -S localhost:8080
```

Abra então <http://localhost:8080>.

## Estrutura principal

```text
.
├── index.php    # Página inicial
├── main.php     # Página principal de conteúdo
├── 1a/          # Exercício 1a
├── 1b/          # Exercício 1b
├── 2a/          # Exercício 2a
└── 2b/          # Exercício 2b
```

## Solução rápida de problemas

- **`php: command not found` ou `'php' is not recognized`:** o PHP não está instalado ou não foi adicionado ao `PATH`.
- **A página não abre:** confirme que o terminal ainda mostra o servidor rodando e que o endereço usa a mesma porta indicada no comando.
- **Erro `Address already in use`:** use outra porta, como no exemplo `8080`.
- **Código PHP aparece como texto:** abra o projeto pelo endereço `localhost` depois de iniciar o servidor; não abra o arquivo `.php` diretamente pelo explorador de arquivos.
