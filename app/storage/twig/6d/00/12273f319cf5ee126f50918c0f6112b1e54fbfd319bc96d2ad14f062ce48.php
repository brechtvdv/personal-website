<?php

/* /var/www/html/october/themes/responsiv-flat/pages/blog/blog.htm */
class __TwigTemplate_6d0012273f319cf5ee126f50918c0f6112b1e54fbfd319bc96d2ad14f062ce48 extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/post1.jpg");
        echo "\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Blog Post #2 -->
            <div class=\"blog\">
                <img src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\">Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 15, 2014</p>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/post2.jpg");
        echo "\" alt=\"\"></a>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('CMS')->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pagination pull-right\">
                <ul>
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/responsiv-flat/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 61,  108 => 60,  82 => 37,  75 => 35,  68 => 31,  62 => 28,  53 => 22,  46 => 20,  39 => 16,  33 => 13,  19 => 1,);
    }
}
