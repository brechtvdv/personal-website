<?php

/* /var/www/html/october/themes/responsiv-flat/partials/subscribe.htm */
class __TwigTemplate_1c93ba54ae13b6c0690d2945916bc2b3cf33f67482b61ed55e0edaabfa79b57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/responsiv-flat/partials/subscribe.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
