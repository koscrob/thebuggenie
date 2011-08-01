<?php

	$tbg_response->addBreadcrumb(__('Project settings'), null, tbg_get_breadcrumblinks('project_settings', $selected_project));
	$tbg_response->setTitle(__('"%project_name%" settings', array('%project_name%' => $selected_project->getName())));

?>
			<?php include_template('project/projectinfosidebar', array('selected_project' => $selected_project)); ?>
			<div style="width: 790px; margin-top: 30px;">
				<?php include_component('configuration/projectconfig', array('project' => $selected_project)); ?>
			</div>
		</td>
	</tr>
</table>