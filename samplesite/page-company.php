 <?php
    /* Template Name: 会社概要 */
    ?>
 <?php get_header(); ?>

 <div id="cont_first" class="container">

     <?php get_sidebar(); ?>

     <div class="">
         <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
     </div>
     <p></p>

     <body>

         <div id="contents">
             <div id="cont_left">
                 <h2>会社概要</h2>
                 <table>
                     <tr>
                         <th>会社名</th>
                         <td><?php the_field('add_name'); ?></td>
                     </tr>
                     <tr>
                         <th>本社</th>
                         <td><?php the_field('add_head'); ?><br>
                             <?php the_field('add_head2'); ?></td>
                         </td>
                     </tr>
                     <tr>
                         <th>設立</th>
                         <td><?php the_field('add_begin'); ?></td>
                     </tr>
                     <tr>
                         <th>資本金</th>
                         <td><?php the_field('add_money'); ?></td>
                     </tr>
                     <tr>
                         <th>従業員数</th>
                         <td><?php the_field('add_member'); ?></td>
                     </tr>
                     <tr>
                         <th>電話番号</th>
                         <td><?php the_field('add_tel'); ?></td>
                     </tr>
                     <tr>
                         <th>代表者</th>
                         <td><?php the_field('add_owner'); ?></td>
                     </tr>
                 </table>
             </div>

         </div>
 </div>

 <div id="pageTop">
     <a href="#">PAGE TOP</a>
 </div>
 </body>
