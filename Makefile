deploy: playbook.yml inventory.ini
	ansible-playbook -i inventory.ini playbook.yml
