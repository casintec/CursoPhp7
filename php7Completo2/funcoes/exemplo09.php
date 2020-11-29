<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 35 - Funções Recursivas

  $hierarquia = array(
    array(
      "nomeCargo"=>"CEO",
      "subordinados"=>array(
        array(
          "nomeCargo"=>"Diretor Comercial",
          "subordinados"=>array(
            array(
              "nomeCargo"=>"Gerente de Vendas"
            )
          )
        ),
        array(
          "nomeCargo"=>"Diretor Financeiro",
          "subordinados"=>array(
            array(
              "nomeCargo"=>"Gerente de Contas a Pagar",
              "subordinados"=>array(
                array(
                  "nomeCargo"=>"Supervisor de Contas a Pagar"
                )
              )
            ),
            array(
              "nomeCargo"=>"Gerente de Compras",
              "subordinados"=>array(
                array(
                  "nomeCargo"=>"Gerente de Compras",
                  "subordinados"=>array(
                    array(
                      "nomeCargo"=>"Supervisor de suprimento",
                      "subordinados"=>array(
                        array(
                          "nomeCargo"=>"Funcionário"
                        )
                      )
                    )
                  )
                )
              )
            )
          )
        )
      )
    )
  );

  function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) {
      $html .="<li>";
      $html .= $cargo['nomeCargo'];
      if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
        $html .= exibe($cargo['subordinados']);
      }
      $html .= "</li>";
    }

    $html .= '</ul>';
    return $html;
  }

  echo exibe($hierarquia);

?>