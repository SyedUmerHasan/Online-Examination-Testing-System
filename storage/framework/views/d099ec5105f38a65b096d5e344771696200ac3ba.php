<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="<?php echo e(url('/admin')); ?>"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">eCommerce</a>
            </li>
            <li><a class="menu-item" href="#" data-i18n="nav.dash.crypto">Crypto</a>
            </li>
            <li><a class="menu-item" href="#" data-i18n="nav.dash.sales">Sales</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>
                </li>
                <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
                </li>
                <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu">Compact Menu</a>
                </li>
                <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu">Content Menu</a>
                </li>
                <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</a>
                </li>
              </ul>
            </li>
            <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>
                </li>
                <li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.templates.horz.top_icon">Full Width</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class=" nav-item"><a href="/admin/CreateTest"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Create Test</span></a>
          <ul class="menu-content">
            <li class=" nav-item"><a href="/admin/CreateTest"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Add New Test</span></a></li>
            <?php if(!empty($testresult) || isset($testresult)): ?>
              <?php $__currentLoopData = $testresult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a class="menu-item" href="/admin/test/<?php echo e($item->test_category); ?>" data-i18n="nav.templates.vert.main"><?php echo e($item->test_category); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </ul>
        </li>


      </ul>
    </div>
  </div>