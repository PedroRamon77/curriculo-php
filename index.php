<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $nomeCompleto = "Pedro Ramon Oliveira Paula";
            $idade = 21;
            $fotoPerfil = "imagens/sua_foto.png";
        ?>
        <div class="perfil">
            <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?> anos</p>
        </div>
    </header>

    <section id="experiencia">
        <h2>Experiencia Profissional</h2>
        <?php
            $experiencias = [
                [
                    "empresa" => "LV construções",
                    "cargo" => "Estagiario",
                    "periodo" => "2021 - 2021",
                    "descricao" => "Nada a Declarar."
                ],
            ];
        ?>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="idiomas">
        <h2>Idiomas</h2>
        <?php
            $idiomas = [
                [
                    "linguagem" => "Inglês",
                    "nivel" => "Básico"
                ],
                [
                    "linguagem" => "Espanhol",
                    "nivel" => "Básico"
                ]
            ];
        ?>

        <?php if (!empty($idiomas)): ?>
            <ul>
                <?php foreach ($idiomas as $idioma): ?>
                    <li>
                        <h3><?php echo $idioma['linguagem']; ?></h3>
                        <h4>Nível: <?php echo $idioma['nivel']; ?></h4>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum idioma informado.</p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php
            $cursos = [
                [
                    "nome" => "Desenho da Construção Civil",
                    "instituicao" => "EEEP Rita Matos Luna",
                    "periodo" => "2019 - 2021"
                ],
                [
                    "nome" => "Sistemas de Informação",
                    "instituicao" => "IFCE campus Cedro",
                    "periodo" => "2022 - Presente"
                ],
            ];
        ?>
        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>    
    </section>

    <section id="Linguagens de Programação">
        <h2>Linguagens de Programação</h2>
        <?php
            $lingsPro = [
                [
                    "linguagem" => "Python",
                    "nivel" => "Intermediario"
                ],
                [
                    "linguagem" => "JavaScript",
                    "nivel" => "Intermediario"
                ],
                [
                    "linguagem" => "Java",
                    "nivel" => "Básico"
                ],
                [
                    "linguagem" => "PHP",
                    "nivel" => "Muito Básico"
                ]
            ];
        ?>
        
        <?php if (!empty($lingsPro)): ?>
            <ul>
                <?php foreach ($lingsPro as $lingPro): ?>
                    <li>
                        <h3><?php echo $lingPro['linguagem']; ?></h3>
                        <h4>Nível: <?php echo $lingPro['nivel']; ?></h4>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum linguagem de Programação foi informada.</p>
        <?php endif; ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
            $habilidades = [
                "PHP" => 7,
                "HTML" => 8,
                "CSS" => 10,
                "JavaScript" => 9,
                "Banco de dados" => 9
            ];

            $hobbies = [
                "Estudar" => 7,
                "Assistir Futebol" => 9,
                "Fazer Caminhada" => 8
            ];
        ?>

        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="preenchido habilidades"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $nivel; ?>/10)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse; $i <10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $interesse; ?>/10)
                        </div>
                    </li>
                <?php endforeach ?>    
            </ul>
        <?php endif; ?>        
    </section>

    <footer>
        <p>º <?php echo date("Y"); ?> Pedro Ramon</p>
    </footer>
</body>
</html>