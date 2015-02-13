<?php

/* /var/www/html/october/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_148da9c5d3ece17d0ca3fd32601f99a1a7d1b5a1678dbc972b702c5de5fc8c50 extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section>

<section id=\"recent-works\">
\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("works"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</section>

<section id=\"services\" class=\"service-item\">
\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</section>

<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("skills"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accordion"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id=\"content\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("tabs"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("testimonials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content-->

<section id=\"partner\">
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("partners"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "</section><!--/#partner-->

<section id=\"conatcat-info\">
\t";
        // line 46
        echo $this->env->getExtension('CMS')->contentFunction("contact-info.htm"        );
        // line 47
        echo "</section><!--/#conatcat-info-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  109 => 46,  104 => 43,  100 => 42,  93 => 37,  88 => 36,  84 => 35,  75 => 28,  70 => 27,  66 => 26,  59 => 21,  55 => 20,  50 => 17,  46 => 16,  41 => 13,  37 => 12,  26 => 3,  22 => 2,  19 => 1,);
    }
}
