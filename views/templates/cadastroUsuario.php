<main>
    <h2>Informações do usuário</h2>
    <fieldset class="fieldset-cadastro">
        <form class="form-cadastro" method="post">
            <div class="div-label-input">
                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Nome:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 50vw" style="width:50vh" type="text" name="nome" placeholder="Ex: Peter Parker" required>
                    </div>
                </div>
               

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Sexo:</strong></label>
                    </div>

                    <div>
                        <select style="width:100px" name="sexo" required>
                            <option value="0">Masculino</option>
                            <option value="1">Feminino</option>
                        </select>
                    </div>
                </div>

               

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Idade:</strong></label>
                    </div>

                    <div>
                        <select name="idade" required>
                            <?php
                            $i = 10;
                            for ($i = 10; $i <= 100; $i++) {
                                $value = $i;
                            ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Data de Nascimento:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 20vw" type="date" name="data_nascimento" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Responsável (RG):</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 20vw" type="text" name="responsavel_rg" placeholder="Ex: 123456789" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Responsável (CPF):</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 20vw" type="text" name="responsavel_cpf" placeholder="Ex: 123.456.789-01" required>
                    </div>
                </div>


                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Telefone:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 25vw" type="text" name="telefone" placeholder="Ex: (92) XXXXX-XXXX">
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Endereço:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 30vw" type="text" name="endereco" placeholder="Rua dos Lobos, nº 49">
                    </div>

                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Escola:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 30vw" type="text" name="escola" placeholder="Ex: Escola ABC" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Turma:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 10vw" type="text" name="turma" placeholder="Ex: A" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Série:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 10vw" type="text" name="serie" placeholder="Ex: 5º" required>
                    </div>
                </div>


                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Disponibilidade de Horário:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 20vw" type="text" name="disponibilidade_horario" placeholder="Ex: Manhã, Tarde" required>
                    </div>
                </div>


                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Ano de Matrícula:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 10vw" type="text" name="ano_matricula" placeholder="Ex: 2024" required>
                    </div>
                </div>


                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Observação:</strong></label>
                    </div>
                    <div>
                        <textarea style="margin: 0.5rem 0 0 0;width: 35vw; height:15vh; border: 1.5px solid black; margin-bottom:2rem" type="text" name="observacao">
                    </textarea>
                    </div>
                </div>

            </div>
            <div class="div-submit-reset">
                <div class="submit-reset">
                    <input class="bt-submit" type="submit" name="bt_enviar" value="Enviar">
                </div>
                <div class="submit-reset">
                    <input class="bt-reset" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </fieldset>
</main>
<?php

use models\CadastroUsuarioModel;

$cad = new CadastroUsuarioModel();
$cad->cadastrarUsuarios();
?>