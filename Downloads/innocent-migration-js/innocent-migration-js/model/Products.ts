export type CategoryType = 'training' | 'tour' | 'vrlab';

export type ProductsType = {
  id: number;
  label: string;
  image: string;
  link: string;
  room_type: CategoryType;
  // device_id:
};
